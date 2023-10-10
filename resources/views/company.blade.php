@extends('layouts.app')

@section("title","Empresa - Sistema de Biblioteca ")

@section("contenido")
<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    @include("layouts.nav")   
    
    <!-- Content page -->
    @include("layouts.company-partial")

    <!-- panel datos de la empresa -->
    <div class="container-fluid">        
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; DATOS DE LA EMPRESA</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="">
                    @csrf
                    <fieldset>
                        <legend><i class="zmdi zmdi-assignment"></i> &nbsp; Datos básicos</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">DNI/CÓDIGO/NÚMERO DE REGISTRO *</label>
                                          <input pattern="[0-9-]{1,30}" class="form-control" type="text" name="dni_reg" required="" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Nombre de la empresa *</label>
                                          <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" type="text" name="nombre_reg" required="" maxlength="40">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Teléfono</label>
                                          <input pattern="[0-9+]{1,15}" class="form-control" type="text" name="telefono_reg" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">E-mail</label>
                                          <input class="form-control" type="email" name="email_reg" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Dirección</label>
                                          <input class="form-control" type="text" name="direccion_reg" maxlength="170">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend><i class="zmdi zmdi-assignment-o"></i> &nbsp; Otros datos</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Nombre del gerente o director *</label>
                                          <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,50}" class="form-control" type="text" name="director_reg" required="" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Símbolo de moneda *</label>
                                          <input class="form-control" type="text" name="moneda_reg" required="" maxlength="1">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Año *</label>
                                          <input pattern="[0-9]{4,4}" class="form-control" type="text" name="year_reg" required="" maxlength="4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <p class="text-center" style="margin-top: 20px;">
                        <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
     
@endsection