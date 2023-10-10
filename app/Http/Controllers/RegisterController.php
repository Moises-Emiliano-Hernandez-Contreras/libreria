<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){ 
        if(auth()->user()->level==1){                    
            return view("admin");  
        }
        return redirect()->to("/home");        
    }
    public function store(Request $request){
        if(auth()->user()->level==1){
            $priv=intval($request->optionsPrivilegio);
            var_export($priv);                
            $user=new User();
            $user->dni=$request->dni;
            $user->name=$request->nameReg;
            $user->lastname=$request->apellido_reg;
            $user->phone=$request->telefono_reg;
            $user->address=$request->direccion_reg;
            $user->username=$request->usuario_reg;
            $user->password=$request->password1_reg;
            $user->genre=$request->optionsGenero;
            $user->email=$request->email_reg;
            $user->level=$priv;        
            $user->save();
            auth()->login($user);
            return redirect()->to('/home');
        }
        return redirect()->to('/admin');
    }
    public function adminList(){
        if(auth()->user()->level==1){
            return view("admin-list");
        }
        return redirect()->to("/home");                        
    }
    public function adminSearch(){
        if(auth()->user()->level==1){
            return view("admin-search");
        }
        return redirect()->to("/home");                        
    }
}
