@extends('layouts.app')

@section("title","Admin - Sistema de Biblioteca ")

@section("contenido")
<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    @include("layouts.nav")   
    
    <!-- Content page -->
@include("layouts.admon-partials")

    <!-- Panel nuevo administrador -->
    <div class="container-fluid">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE ADMINISTRADORES</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">DNI</th>
                                <th class="text-center">NOMBRES</th>
                                <th class="text-center">APELLIDOS</th>
                                <th class="text-center">TELÉFONO</th>
                                <th class="text-center">A. CUENTA</th>
                                <th class="text-center">A. DATOS</th>
                                <th class="text-center">ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>7890987651</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                                <td>Telefono</td>
                                <td>
                                    <a href="#!" class="btn btn-success btn-raised btn-xs">
                                        <i class="zmdi zmdi-refresh"></i>
                                    </a>
                                </td>
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
                            <tr>
                                <td>2</td>
                                <td>7890987651</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                                <td>Telefono</td>
                                <td>
                                    <a href="#!" class="btn btn-success btn-raised btn-xs">
                                        <i class="zmdi zmdi-refresh"></i>
                                    </a>
                                </td>
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