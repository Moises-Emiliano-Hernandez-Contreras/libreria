@extends('layouts.app')

@section("title","Configuarción del libro - Sistema de Biblioteca ")

@section("contenido")
<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    @include("layouts.nav")   
    
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i> GESTIÓN DE LIBRO</small></h1>
			</div>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>
		
		<!-- Tabla de adjuntos -->
		<div class="container-fluid">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-attachment-alt"></i> &nbsp; GESTIONAR ADJUNTOS</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th class="text-center">Nombre</th>
									<th class="text-center">Tipo</th>
									<th class="text-center">Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">Nombre Archivo</td>
									<td class="text-center">Tipo Archivo</td>
									<td>
										<form action="">
											<input type="hidden" name="adjunto-tipo" value="">
											<input type="hidden" name="adjunto-nombre" value="">
											<p class="text-center">
												<button class="btn btn-raised btn-danger btn-xs"><i class="zmdi zmdi-delete"></i></button>
											</p>
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- Panel actualizar libro -->
		<div class="container-fluid">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="zmdi zmdi-refresh"></i> &nbsp; ACTUALIZAR LIBRO</h3>
				</div>
				<div class="panel-body">
					<form method="POST" action="/book-config" enctype="multiform/form-data">
						@csrf
						<input type="hidden" name="id" value="{{$book[0]->id}}">
						<fieldset>
							<legend><i class="zmdi zmdi-library"></i> &nbsp; Información básica</legend>
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Código de libro *</label>
										  	<input pattern="[a-zA-Z0-9-]{1,30}" class="form-control" value="{{$book[0]->code}}" type="text" name="codigo_up" required="" maxlength="30">
										</div>
				    				</div>
									<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Título *</label>
										  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" value="{{$book[0]->title}}" class="form-control" type="text" name="titulo_up" required="" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Autor *</label>
										  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" value="{{$book[0]->author}}" class="form-control" type="text" name="autor_up" required="" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">País</label>
										  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" value="{{$book[0]->country}}" class="form-control" type="text" name="pais_up" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Año</label>
										  	<input pattern="[0-9]{1,4}" value="{{$book[0]->year}}" class="form-control" type="text" name="year_up" maxlength="4">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Editorial</label>
										  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" value="{{$book[0]->publisher}}" class="form-control" type="text" name="editorial_up" maxlength="30">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Edición</label>
										  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" value="{{$book[0]->edition}}" class="form-control" type="text" name="edicion_up" maxlength="30">
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
														@if ($empresa->id==$book[0]->empresas_id)
														<option selected value={{$empresa->id}}>{{$empresa->name}}</option>
														@endif
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
						<fieldset>
							<legend><i class="zmdi zmdi-money-box"></i> &nbsp; Precio, Ejemplares y Ubicación</legend>
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Precio</label>
										  	<input value="{{$book[0]->price}}" pattern="[0-9.]{1,7}" class="form-control" type="text" name="precio_up" maxlength="7">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Ejemplares</label>
										  	<input value="{{$book[0]->copies}}" pattern="[0-9]{1,3}" class="form-control" type="text" name="ejemplares_up" maxlength="3">
										</div>
				    				</div>
				    				<div class="col-xs-12">
								    	<div class="form-group label-floating">
										  	<label class="control-label">Ubicación</label>
										  	<input value="{{$book[0]->address}}" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="ubicacion_up" maxlength="30">
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
										  	<textarea name="resumen_up" value="{{$book[0]->summary}}" class="form-control" rows="3">{{$book[0]->summary}}</textarea>
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
									<input type="file" name="imagen_up" accept=".jpg, .png, .jpeg">
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
									<input type="file" name="pdf_up" accept=".pdf">
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
								@if ($book[0]->downloadable==1)
								<div class="form-group">
									<label class="control-label">¿El archivo PDF será descargable para los clientes?</label>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="optionsPDF" id="optionsRadios1" value="Si" checked="">
											<i class="zmdi zmdi-cloud-download"></i> &nbsp; Si, PDF descargable
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="optionsPDF" id="optionsRadios2" value="No">
											<i class="zmdi zmdi-cloud-off"></i> &nbsp; No, PDF no descargable
										</label>
									</div>
								</div>									
								@endif						
								@if ($book[0]->downloadable==0)
								<div class="form-group">
									<label class="control-label">¿El archivo PDF será descargable para los clientes?</label>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="optionsPDF" id="optionsRadios1" value=1>
											<i class="zmdi zmdi-cloud-download"></i> &nbsp; Si, PDF descargable
										</label>
									</div>
									<div class="radio radio-primary">
										<label>
											<input type="radio" name="optionsPDF" id="optionsRadios2" value=0 checked="">
											<i class="zmdi zmdi-cloud-off"></i> &nbsp; No, PDF no descargable
										</label>
									</div>
								</div>									
								@endif		
		    				</div>
						</fieldset>
						<p class="text-center" style="margin-top: 20px;">
					    	<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
					    </p>
					</form>
				</div>
			</div>
		</div>

		<!-- Panel eliminar libro -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="zmdi zmdi-delete"></i> &nbsp; ELIMINAR LIBRO</h3>
						</div>
						<div class="panel-body">
							<p class="lead">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi voluptatem quas impedit, sint eos corrupti cupiditate.
							</p>
							<form>
								<input type="hidden" value="">
								<p class="text-center">
									<button class="btn btn-raised btn-danger">
										<i class="zmdi zmdi-delete"></i> &nbsp; ELIMINAR DEL SISTEMA
									</button>	
								</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
     
@endsection