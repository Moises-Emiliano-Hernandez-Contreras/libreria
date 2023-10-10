@extends('layouts.app')

@section("title","Proveedores - Sistema de Biblioteca ")

@section("contenido")
<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    @include("layouts.nav")   
    
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-search zmdi-hc-fw"></i> BUSCAR LIBRO</h1>
			</div>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>

		<div class="container-fluid">
			<form class="well">
				<div class="row">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<div class="form-group label-floating">
							<span class="control-label">¿Qué libro estas buscando?</span>
							<input class="form-control" type="text" name="search_book_init" required="">
						</div>
					</div>
					<div class="col-xs-12">
						<p class="text-center">
							<button type="submit" class="btn btn-primary btn-raised btn-sm"><i class="zmdi zmdi-search"></i> &nbsp; Buscar</button>
						</p>
					</div>
				</div>
			</form>
		</div>

		<div class="container-fluid">
			<form class="well">
				<p class="lead text-center">Su última búsqueda  fue <strong>“Busqueda”</strong></p>
				<div class="row">
					<input class="form-control" type="hidden" name="search_book_destroy">
					<div class="col-xs-12">
						<p class="text-center">
							<button type="submit" class="btn btn-danger btn-raised btn-sm"><i class="zmdi zmdi-delete"></i> &nbsp; Eliminar búsqueda</button>
						</p>
					</div>
				</div>
			</form>
		</div>

		<div class="container-fluid">
			<h2 class="text-titles text-center">Categoría seleccionada</h2>
			<div class="row">
				<div class="col-xs-12">
					<div class="list-group">

						@include("layouts.catalog-partials")
					</div>
					<nav class="text-center">
						<ul class="pagination pagination-sm">
							<li class="disabled"><a href="javascript:void(0)">«</a></li>
							<li class="active"><a href="javascript:void(0)">1</a></li>
							<li><a href="javascript:void(0)">2</a></li>
							<li><a href="javascript:void(0)">3</a></li>
							<li><a href="javascript:void(0)">4</a></li>
							<li><a href="javascript:void(0)">5</a></li>
							<li><a href="javascript:void(0)">»</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
</section>
     
@endsection