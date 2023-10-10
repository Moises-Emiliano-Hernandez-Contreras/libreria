<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\empresaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CLientController;

Route::middleware("auth")->group(function () {    
    /* CONTROLADOR DE LA EMPRESA */
    Route::get('/company', [empresaController::class,"index"])->name("empresa.index");
    Route::post('/company', [empresaController::class,"store"])->name("empresa.store");        
    Route::get('/company-list', [empresaController::class,"listCompany"])->name("empresa.list");
    /* CONTROLADOR DE CATEGORIAS */
    Route::get('/category',[CategoryController::class,"index"])->name("category.index");
    Route::post('/category',[CategoryController::class,"store"])->name("category.store");
    Route::get('/category-list', [CategoryController::class,"categoryList"])->name("category.list");
    /* CONTROLADOR DE PROVEEDORES */
    Route::get('/provider', [ProviderController::class,"index"])->name("provider.index");
    Route::post('/provider', [ProviderController::class,"store"])->name("provider.store");
    Route::get('/provider-list', [ProviderController::class,"providerList"])->name("provider.list");
    /* CONTROLADOR DE LIBROS */
    //Route::get('/book-config/{id?}', [BookController::class,"bookConfig"])->name("book.config");
    Route::get('/book-info/{id}', [BookController::class,"bookInfo"])->name("book.info");
    Route::get('/book', [BookController::class,"index"])->name("book.index");
    Route::post('/book', [BookController::class,"store"])->name("book.store");
    Route::get('/book-config/{id}', [BookController::class,"bookConfig"])->name("book.config");
    Route::post('/book-config', [BookController::class,"bookUpdate"])->name("book.config");
    Route::get('/catalogo', [BookController::class,"bookCatalogo"]);    
    Route::get('/downloadBook/0{id}',[BookController::class,"downloadBook"])->name('book.download');
    /* SIN RESTRICCIÓN DE ACCESO */
    Route::get('/my-data', function () {return view('my-data');});
    Route::get('/my-account', function () {return view('my-account');});
    Route::get('/search', function () {return view("search");});        
    Route::get('/logout', [SessionController::class,"destroySession"]);    
    Route::get('/home', function (Request $resquest) {return view('home');});
    /* CONTROLADOR DE CLIENTES */
    Route::get('/client-search', [CLientController::class,"clientSearch"])->name("client.search");    
    Route::get('/client-list', [CLientController::class,"clientList"])->name("client.list");
    Route::get('/client', [CLientController::class,"index"])->name("client.index");
    /* CONTROLAODR DE REGISTRO */        
    Route::get('/admin-search', [RegisterController::class,"adminSearch"])->name("register.adminSearch");
    Route::get('/admin-list', [RegisterController::class,"adminList"])->name("register.adminList");
    Route::get('/admin', [RegisterController::class,"create"])->name('register.index');
    Route::post('/admin', [RegisterController::class,"store"])->name('register.store');    
    
    

    
});





/* Login */
Route::post('/index', [SessionController::class,"store"])->name('login.store');
Route::get('/', [SessionController::class,"create"])->name('login');
