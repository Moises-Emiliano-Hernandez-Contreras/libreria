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
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO ADMINISTRADOR</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="">
                    @csrf
                    <fieldset>
                        <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información personal</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                          <label class="control-label">DNI/CEDULA *</label>
                                          <input pattern="[0-9-]{1,30}" class="form-control" type="text" name="dni" required="" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Nombres *</label>
                                          <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="nameReg" required="" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Apellidos *</label>
                                          <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="apellido_reg" required="" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Teléfono</label>
                                          <input pattern="[0-9+]{1,15}" class="form-control" type="text" name="telefono_reg" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Dirección</label>
                                          <textarea name="direccion_reg" class="form-control" rows="2" maxlength="100"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend><i class="zmdi zmdi-key"></i> &nbsp; Datos de la cuenta</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Nombre de usuario *</label>
                                          <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,15}" class="form-control" type="text" name="usuario_reg" required="" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Contraseña *</label>
                                          <input class="form-control" type="password" name="password1_reg" required="" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Repita la contraseña *</label>
                                          <input class="form-control" type="password" name="password2-reg" required="" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                          <label class="control-label">E-mail</label>
                                          <input class="form-control" type="email" name="email_reg" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Genero</label>
                                        <div class="radio radio-primary">
                                            <label>
                                                <input type="radio" name="optionsGenero" id="optionsRadios1" value="Masculino" checked="">
                                                <i class="zmdi zmdi-male-alt"></i> &nbsp; Masculino
                                            </label>
                                        </div>
                                        <div class="radio radio-primary">
                                            <label>
                                                <input type="radio" name="optionsGenero" id="optionsRadios2" value="Femenino">
                                                <i class="zmdi zmdi-female"></i> &nbsp; Femenino
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend><i class="zmdi zmdi-star"></i> &nbsp; Nivel de privilegios</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <p class="text-left">
                                        <div class="label label-success">Nivel 1</div> Control total del sistema
                                    </p>
                                    <p class="text-left">
                                        <div class="label label-primary">Nivel 2</div> Permiso para registro y actualización
                                    </p>
                                    <p class="text-left">
                                        <div class="label label-info">Nivel 3</div> Permiso para registro
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="radio radio-primary">
                                        <label>
                                            <input type="radio" name="optionsPrivilegio" id="optionsRadios1" value="1">
                                            <i class="zmdi zmdi-star"></i> &nbsp; Nivel 1
                                        </label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <label>
                                            <input type="radio" name="optionsPrivilegio" id="optionsRadios2" value="2">
                                            <i class="zmdi zmdi-star"></i> &nbsp; Nivel 2
                                        </label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <label>
                                            <input type="radio" name="optionsPrivilegio" id="optionsRadios3" value="3" checked="">
                                            <i class="zmdi zmdi-star"></i> &nbsp; Nivel 3
                                        </label>
                                    </div>
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