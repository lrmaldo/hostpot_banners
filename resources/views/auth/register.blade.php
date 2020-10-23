@extends('layouts.app')

@section('content')
<div class="div "  style="background-color: rgba(0,0,0,0.1);" >

    <div class=" row justify-content-center custom-margin " >
        
        <div class=" card  mb-3" style="background: rgba(0, 0, 0, 0.5) " >
            <div class="h2" style="color: #f1f1f1;">
                Registro
            </div>
            
            <div class="card-body" style="color: #f1f1f1;" >
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-6 control-label">Nombre</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-6 control-label">Correo</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-6 control-label">Contraseña</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-12 control-label">Confirmar contraseña</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Registrar
                            </button>
                        </div>
                    </div>
                </form>
                

            </div>
        </div>
    </div>
</div>

                    
              
@endsection


<style>
    .div{
  height:100%;
  width: 100%;
 
  position: fixed;
  background-image: url("img/torres/torre2.jpg");
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
 
}


      .custom-margin {
         margin-top: 10vh;
      }
.login{
    /*background-color:rgb(255,0,0);*/
    opacity:0.6; /* Opacidad 60% */
}
</style>