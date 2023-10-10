@extends('layouts.app')

@section("title","Libro - Sistema de Biblioteca ")

@section("contenido")
<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    @include("layouts.nav")   
    
    <!-- Content page -->
	<div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Administración <small>NUEVO LIBRO</small></h1>
        </div>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
    </div>
    @php
        
    @endphp
        
    <!-- Panel nuevo libro -->
    <div class="container-fluid">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO LIBRO</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend><i class="zmdi zmdi-library"></i> &nbsp; Información básica</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Código de libro *</label>
                                          <input pattern="[a-zA-Z0-9-]{1,30}" class="form-control" type="text" name="code" required="" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Título *</label>
                                          <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="title" required="" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Autor *</label>
                                          <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="author" required="" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">País</label>
                                          <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="country" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Año</label>
                                          <input pattern="[0-9]{1,4}" class="form-control" type="text" name="year" maxlength="4">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Editorial</label>
                                          <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="publisher" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Edición</label>
                                          <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="edition" maxlength="30">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend><i class="zmdi zmdi-labels"></i> &nbsp; Empresa, Categoría y Proveedor</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Empresa</label>
                                          <select name="company_id" class="form-control">                                            
                                                @foreach ($empresas as $empresa)                                                    
                                                    <option value={{$empresa->id}}>{{$empresa->name}}</option>
                                                @endforeach                                              
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Categoría</label>
                                          <select name="category_id" class="form-control">
                                            @foreach ($categorys as $category)                                                    
                                                <option value={{$category->id}}>{{$category->name}}</option>
                                            @endforeach  
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Proveedor</label>
                                          <select name="provider_id" class="form-control">
                                            @foreach ($providers as $provider)                                                    
                                                <option value={{$provider->id}}>{{$provider->name}}</option>
                                            @endforeach                                             
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend><i class="zmdi zmdi-money-box"></i> &nbsp; Precio, Ejemplares y Ubicación</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Precio</label>
                                          <input pattern="[0-9.]{1,7}" class="form-control" type="text" name="price" maxlength="7">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Ejemplares</label>
                                          <input pattern="[0-9]{1,3}" class="form-control" type="text" name="copies" maxlength="3">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Ubicación</label>
                                          <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="address" maxlength="30">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend><i class="zmdi zmdi-assignment-o"></i> &nbsp; Resumen del libro</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Resumen</label>
                                          <textarea name="summary" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend><i class="zmdi zmdi-attachment-alt"></i> &nbsp; Imágen y archivo PDF</legend>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <span class="control-label">Imágen</span>
                                <input type="file" name="image_name" accept=".jpg, .png, .jpeg">
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control" placeholder="Elija la imágen...">
                                    <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-fab btn-fab-mini">
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                        </button>
                                    </span>
                                </div>
                                <span><small>Tamaño máximo de los archivos adjuntos 5MB. Tipos de archivos permitidos imágenes: PNG, JPEG y JPG</small></span>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <span class="control-label">PDF</span>
                                <input type="file" name="pdf_name" accept=".pdf">
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control" placeholder="Elija el PDF...">
                                    <span class="input-group-btn input-group-sm">
                                        <button type="button" class="btn btn-fab btn-fab-mini">
                                            <i class="zmdi zmdi-attachment-alt"></i>
                                        </button>
                                    </span>
                                </div>
                                <span><small>Tamaño máximo de los archivos adjuntos 5MB. Tipos de archivos permitidos: documentos PDF</small></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label class="control-label">¿El archivo PDF será descargable para los clientes?</label>
                                <div class="radio radio-primary">
                                    <label>
                                        <input type="radio" name="downloadable" id="optionsRadios1" value={{TRUE}} checked="">
                                        <i class="zmdi zmdi-cloud-download"></i> &nbsp; Si, PDF descargable
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <label>
                                        <input type="radio" name="downloadable" id="optionsRadios2" value={{FALSE}}>
                                        <i class="zmdi zmdi-cloud-off"></i> &nbsp; No, PDF no descargable
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <p class="text-center" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                    </p>
                </form>
            </div>
        </div>
    </div>

</section>
     
@endsection