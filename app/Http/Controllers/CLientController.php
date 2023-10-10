<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CLientController extends Controller
{
    public function index(){
        if(auth()->user()->level==1||auth()->user()->level==2||auth()->user()->level==3){
            return view("client");
        }
        return redirect()->to("/home");          
    }
    public function clientList(){
        if(auth()->user()->level==1||auth()->user()->level==2||auth()->user()->level==3){
            return view("client-list");
        }
        return redirect()->to("/home");          
    }
    public function clientSearch(){
        if(auth()->user()->level==1||auth()->user()->level==2||auth()->user()->level==3){
            return view("client-search");
        }
        return redirect()->to("/home");          
    }
}
