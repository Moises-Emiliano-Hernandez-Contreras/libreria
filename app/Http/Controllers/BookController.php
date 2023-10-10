<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class BookController extends Controller
{
    public function index(){
        if(auth()->user()->level==1||auth()->user()->level==2){
            $sql = 'SELECT * FROM empresas';
        $empresas = DB::select($sql);

        $sql = 'SELECT * FROM category';
        $categorys = DB::select($sql);
        
        $sql = 'SELECT * FROM provider';
        $providers = DB::select($sql);
        
        return view('book')->with("empresas",$empresas)->with("categorys",$categorys)
        ->with("providers",$providers);
        }
        return redirect()->to("/home");
        
    }
    public function store(Request $request){ 
        if(auth()->user()->level==1||auth()->user()->level==2){
            $descargable=FALSE;
            if($request->downloadable=="1"){
                $descargable=TRUE;
            }       
            $libro=new Libro();
            $libro->code=$request->code;
            $libro->title=$request->title;
            $libro->author=$request->author;        
            $libro->country=$request->country;        
            $libro->year=intval($request->year);        
            $libro->publisher=$request->publisher;        
            $libro->edition=$request->edition;        
            $libro->empresas_id=intval($request->company_id);        
            $libro->category_id=intval($request->category_id);        
            $libro->provider_id=intval($request->provider_id);        
            $libro->price=floatval($request->price);        
            $libro->copies=intval($request->copies);        
            $libro->address=$request->address;                
            $libro->summary=$request->summary;                    
            $libro->image_name=$request->file("image_name")->getClientOriginalName();                        
            $libro->pdf_name=$request->file("pdf_name")->getClientOriginalName();                
            $libro->downloadable=$descargable;                        
            \Storage::disk('local')->put($request->file('pdf_name')->getClientOriginalName(),  \File::get($request->file('pdf_name')));     
            \Storage::disk('local')->put($request->file('image_name')->getClientOriginalName(),  \File::get($request->file('image_name')));     
            $libro->save(); 
        return redirect()->to('/book');
        }        
        return redirect()->to("/home");        
    }
    public function bookInfo($id=2){    
        $sql = 'SELECT * FROM book WHERE id='.$id;
        $book = DB::select($sql);        
        return view("book-info")->with("book",$book);
    }
    public function bookConfig($id){
        if(auth()->user()->level==1||auth()->user()->level==2||auth()->user()->level==3){
            $sql = 'SELECT * FROM book WHERE id='.$id;
            $book = DB::select($sql);
            $sql = 'SELECT * FROM empresas';
            $empresas = DB::select($sql);
            $sql = 'SELECT * FROM category';
            $categorys = DB::select($sql);
            $sql = 'SELECT * FROM provider';
            $providers = DB::select($sql);            
            return view("book-config")->with("book",$book)->with("empresas",$empresas)->with("categorys",$categorys)
            ->with("providers",$providers);
        }
        return redirect()->to("/home");             
    }
    public function bookCatalogo(){        
        $sql = 'SELECT * FROM book';
        $books = DB::select($sql);                
        return view('catalogo')->with("books",$books);                            
    }    
    public function downloadBook($id){
        $sql = 'SELECT * FROM book WHERE id='.$id;
        $book = DB::select($sql);
        $fileName=$book[0]->pdf_name;
        $ruta=storage_path('\app\ '.$fileName);
        $pathtoFile= str_replace(" ","",$ruta);
        return response()->download($pathtoFile);        
    }
    public function bookUpdate(Request $request){
        $libroAct = Libro::findOrFail($request->id);        
        $libroAct->code=$request->codigo_up;
        $libroAct->title=$request->titulo_up;
        $libroAct->author=$request->autor_up;        
        $libroAct->country=$request->pais_up;        
        $libroAct->year=intval($request->year_up);        
        $libroAct->publisher=$request->editorial_up;        
        $libroAct->edition=$request->edicion_up;        
        $libroAct->empresas_id=intval($request->company_id);        
        $libroAct->category_id=intval($request->category_id);        
        $libroAct->provider_id=intval($request->provider_id);        
        $libroAct->price=floatval($request->precio_up);        
        $libroAct->copies=intval($request->ejemplares_up);        
        $libroAct->address=$request->ubicacion_up;                
        $libroAct->summary=$request->resumen_up;         
        $libroAct->downloadable=intval($request->optionsPDF);                        
        if($request->imagen_up!=null){
            $libroAct->image_name=$request->file("image_up")->getClientOriginalName();                                                
            \Storage::disk('local')->put($request->file('image_up')->getClientOriginalName(),  \File::get($request->file('image_up')));     
        }else{
            $libroAct->image_name=$libroAct->image_name;
        }        
        if($request->pdf_up!=null){            
            $libro->pdf_name=$request->file("pdf_up")->getClientOriginalName();                            
            \Storage::disk('local')->put($request->file('pdf_up')->getClientOriginalName(),  \File::get($request->file('pdf_up')));                 
        }else{
            $libroAct->pdf_name=$libroAct->pdf_name;
        }        
        return $libroAct;
    }
}
