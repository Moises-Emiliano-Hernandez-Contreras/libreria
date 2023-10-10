<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class empresaController extends Controller
{
    public function index(){
        if(auth()->user()->level==1||auth()->user()->level==2){
            return view("company");        
        }
        return redirect()->to("/home");        
    }
    public function store(Request $request){        
        if(auth()->user()->level==1||auth()->user()->level==2){
            $company=new Empresa();
            $company->dni=$request->dni_reg;
            $company->name=$request->nombre_reg;
            $company->phone=$request->telefono_reg;
            $company->email=$request->email_reg;
            $company->address=$request->direccion_reg;
            $company->CEOname=$request->director_reg;
            $company->currency=$request->moneda_reg;
            $company->year=$request->year_reg;
            $company->save();                       
            return redirect()->to('/company');
        }
        return redirect()->to('/home');
    }
    public function listCompany(){
        if(auth()->user()->level==1||auth()->user()->level==2){
            $sql = 'SELECT * FROM empresas';
            $empresas = DB::select($sql);            
            return view("company-list")->with("empresas",$empresas);        
        }
        return redirect()->to("/home");        
    }
}
