@extends('layouts.app')

@section("title","Catalogo - Sistema de Biblioteca ")

@section("contenido")
<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    @include("layouts.nav")   
    
    <!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-book-image zmdi-hc-fw"></i> CATALOGO</h1>
			</div>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
		</div>
		<div class="container-fluid text-center">
			<div class="btn-group">
              <a href="javascript:void(0)" class="btn btn-default btn-raised">SELECCIONE UNA CATEORÍA</a>
              <a href="javascript:void(0)" data-target="dropdown-menu" class="btn btn-default btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#!">Categoría 1</a></li>
                <li><a href="#!">Categoría 2</a></li>
                <li><a href="#!">Categoría 3</a></li>
                <li><a href="#!">Categoría 4</a></li>
                <li><a href="#!">Categoría 5</a></li>
                <li><a href="#!">Categoría 6</a></li>
                <li><a href="#!">Categoría 7</a></li>
              </ul>
            </div>
		</div>
		<div class="container-fluid">
			<h2 class="text-titles text-center">Categoría seleccionada</h2>
			<div class="row">
				<div class="col-xs-12">
					<div class="list-group">
						@foreach ($books as $book)
							@include("layouts.catalog-partials")							
						@endforeach
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