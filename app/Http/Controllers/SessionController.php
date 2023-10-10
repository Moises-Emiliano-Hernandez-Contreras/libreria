<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SessionController extends Controller
{
    public function create(){
        return view("welcome");    
    }
    public function store(Request $request){        
            if(auth()->attempt(request(['email', 'password']))==false){
            return back();
        }        
        $users = DB::table('users')->where('email', $request->email)->first();        
        $usrname = $users->username;
        $access= $users->level;        
        session(["username"=>$usrname,"nivel"=>$access,"email"=>$request->email]); 
        if($access==4){
            return redirect("/catalogo");    
        }              
        return redirect("/home");
    }
    public function destroySession(){             
        auth()->logout();
        return redirect()->to("/");
    }
    
}
