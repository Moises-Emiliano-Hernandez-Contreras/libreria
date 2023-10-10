<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        if(auth()->user()->level==1||auth()->user()->level==2){
            return view("category");        
        }        
        return redirect()->to("/home"); 
    }
    public function store(Request $request){
        if(auth()->user()->level==1||auth()->user()->level==2){
            $category=new Category();
            $category->code=$request->code;
            $category->name=$request->name;
            $category->save();   
        return redirect()->to('/category');
        }        
        return redirect()->to('/home');
    }
    public function categoryList(){
        if(auth()->user()->level==1||auth()->user()->level==2){
            $sql = 'SELECT * FROM category';
            $categorys = DB::select($sql);            
            return view("category-list")->with("categorys",$categorys);        
        }
        return redirect()->to("/home");        
    }
}
