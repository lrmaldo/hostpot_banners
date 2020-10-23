@extends('layouts.app')

@section('content')
    <div class="div container-fluid" style="background-color: rgba(0,0,0,0.1);">

        <div class=" row justify-content-center custom-margin">

            <div class=" card  mb-3" style="background: rgba(0, 0, 0, 0.5) ">
                <div class="card-header" style="color: #f1f1f1;">
                    Login
                </div>

                <div class="card-body">



                    <form class="form-horizontal " style="color: #f1f1f1;" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-6 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-6 control-label">Password</label>

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
                            <div class="col-md-12 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Recuerdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" style="color: #f1f1f1;" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <style>
            .div {
                height: 100%;
                width: 100%;

                position: fixed;
                background-image: url("img/torres/torre2.jpg");
                background-position: center;
                /* Center the image */
                background-repeat: no-repeat;
                /* Do not repeat the image */
                background-size: cover;

            }


            .custom-margin {
                margin-top: 20vh;
            }

            .login {
                /*background-color:rgb(255,0,0);*/
                opacity: 0.6;
                /* Opacidad 60% */
            }

        </style>

        <script type="text/javascript">
            $(document).ready(function() {

                var height = $(window).height();

                /*  $('#div').height(height); */
            });

        </script>

    @endsection
