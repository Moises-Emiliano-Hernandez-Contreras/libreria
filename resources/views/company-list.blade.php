@extends('layouts.app')

@section("title","Empresa - Sistema de Biblioteca ")

@section("contenido")
<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    @include("layouts.nav")   
    
    <!-- Content page -->
@include("layouts.company-partial")

    <!-- panel lista de empresas -->
    <div class="container-fluid">        
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE EMPRESAS</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>

                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">DNI</th>
                                <th class="text-center">NOMBRE</th>
                                <th class="text-center">PHONE</th>
                                <th class="text-center">EMAIL</th>
                                <th class="text-center">ADDRESS</th>
                                <th class="text-center">CEO</th>
                                <th class="text-center">ACTUALIZAR</th>
                                <th class="text-center">ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empresas as $empresa)
                            <tr>
                                <td>{{$empresa->id}}</td>
                                <td>{{$empresa->dni}}</td>
                                <td>{{$empresa->name}}</td>
                                <td>{{$empresa->phone}}</td>
                                <td>{{$empresa->email}}</td>
                                <td>{{$empresa->address}}</td>
                                <td>{{$empresa->CEOname}}</td>
                                <td>
                                    <a href="#!" class="btn btn-success btn-raised btn-xs">
                                        <i class="zmdi zmdi-refresh"></i>
                                    </a>
                                </td>
                                <td>
                                    <form>
                                        <button type="submit" class="btn btn-danger btn-raised btn-xs">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>                                                                                            
                            @endforeach

                        </tbody>
                    </table>
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