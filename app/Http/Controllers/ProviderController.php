<?php

namespace App\Http\Controllers;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{
    public function index(){
        if(auth()->user()->level==1||auth()->user()->level==2){
            return view("/provider");        
        }        
        return redirect()->to("/home"); 
    }
    public function store(Request $request){
        if(auth()->user()->level==1||auth()->user()->level==2){
            $provider=new Provider();
            $provider->name=$request->name;
            $provider->supervisor=$request->supervisor;
            $provider->phone=$request->phone;
            $provider->email=$request->email;
            $provider->address=$request->address;
            $provider->save();            
        return redirect()->to('/provider');

        }        
        return redirect()->to('/home');    
    }
    public function providerList(){
        if(auth()->user()->level==1||auth()->user()->level==2){
            $sql = 'SELECT * FROM provider';
            $providers = DB::select($sql);            
            return view("provider-list")->with("providers",$providers);        
        }
        return redirect()->to("/home");        
    }
}
