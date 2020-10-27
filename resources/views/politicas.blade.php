{{-- @extends('layouts.app')

@section('content') --}}


{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Ing. Leonardo Maldonado López" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="img/icon.ico" />

    <title>SattLink</title>

    <!-- Styles -->
    {{--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="layoutAuthentication" class="div contenedor">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5"
                                style="background-color: rgba(0,0,0,0.6);">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4 text-white">Política de privacidad
                                    </h3>
                                </div>
                                <div class="card-body  text-white">
                                    <div>
                                        El presente Política de Privacidad establece los términos en que Sattlink ahora
                                        Enlace de Datos y Redes S.A de C.V. ("Sattlink" o "nosotros") usa y protege la
                                        información que es proporcionada por sus usuarios al momento de utilizar su
                                        sitio web. Esta compañía está comprometida con la seguridad de los datos de sus
                                        usuarios. Cuando le pedimos llenar los campos de información personal con la
                                        cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de
                                        acuerdo con los términos de este documento. Sin embargo esta Política de
                                        Privacidad puede cambiar con el tiempo o ser actualizada por lo que le
                                        recomendamos y enfatizamos revisar continuamente esta página para asegurarse que
                                        está de acuerdo con dichos cambios.
                                    </div>

                                    <h3 class="text-center font-weight-light my-4 text-white">Información que es
                                        recogida
                                    </h3>
                                    <div>
                                        Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,
                                        información de contacto como su dirección de correo electrónica e información
                                        demográfica. Así mismo cuando sea necesario podrá ser requerida información
                                        específica para procesar algún pedido o realizar una entrega o facturación.
                                    </div>

                                    <h3 class="text-center font-weight-light my-4 text-white">Uso de la información
                                        recogida</h3>
                                    <div>
                                        Nuestro sitio web emplea la información con el fin de proporcionar el mejor
                                        servicio posible, particularmente para mantener un registro de usuarios, de
                                        pedidos en caso que aplique, y mejorar nuestros productos y servicios. Es
                                        posible que sean enviados correos electrónicos periódicamente a través de
                                        nuestro sitio con ofertas especiales, nuevos productos y otra información
                                        publicitaria que consideremos relevante para usted o que pueda brindarle algún
                                        beneficio, estos correos electrónicos serán enviados a la dirección que usted
                                        proporcione y podrán ser cancelados en cualquier momento.

                                        Sattlink ahora Enlace de Datos y Redes S.A de C.V. ("Sattlink" o "nosotros")
                                        está altamente comprometido para cumplir con el compromiso de mantener su
                                        información segura. Usamos los sistemas más avanzados y los actualizamos
                                        constantemente para asegurarnos que no exista ningún acceso no autorizado.
                                    </div>


                                    <h3 class="text-center font-weight-light my-4 text-white">Cookies</h3>
                                    <div>
                                        Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar
                                        permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la
                                        cookie sirve entonces para tener información respecto al tráfico web, y también
                                        facilita las futuras visitas a una web recurrente. Otra función que tienen las
                                        cookies es que con ellas las web pueden reconocerte individualmente y por tanto
                                        brindarte el mejor servicio personalizado de su web.

                                        Nuestro sitio web emplea las cookies para poder identificar las páginas que son
                                        visitadas y su frecuencia. Esta información es empleada únicamente para análisis
                                        estadístico y después la información se elimina de forma permanente. Usted puede
                                        eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las
                                        cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan
                                        acceso a información de su ordenador ni de usted, a menos de que usted así lo
                                        quiera y la proporcione directamente o visitas una página web . Usted puede
                                        aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan
                                        cookies automáticamente pues sirve para tener un mejor servicio web. También
                                        usted puede cambiar la configuración de su ordenador para declinar las cookies.
                                        Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.
                                    </div>

                                    <h3 class="text-center font-weight-light my-4 text-white">Enlaces a Terceros</h3>
                                    <div>
                                        Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su
                                        interés. Una vez que usted de clic en estos enlaces y abandone nuestra página,
                                        ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no
                                        somos responsables de los términos o privacidad ni de la protección de sus datos
                                        en esos otros sitios terceros. Dichos sitios están sujetos a sus propias
                                        políticas de privacidad por lo cual es recomendable que los consulte para
                                        confirmar que usted está de acuerdo con estas.
                                    </div>

                                    <h3 class="text-center font-weight-light my-4 text-white">Control de su información
                                        personal</h3>
                                    <div>
                                        En cualquier momento usted puede restringir la recopilación o el uso de la
                                        información personal que es proporcionada a nuestro sitio web. Cada vez que se
                                        le solicite rellenar un formulario, como el de alta de usuario, puede marcar o
                                        desmarcar la opción de recibir información por correo electrónico. En caso de
                                        que haya marcado la opción de recibir nuestro boletín o publicidad usted puede
                                        cancelarla en cualquier momento.

                                        Esta compañía no venderá, cederá ni distribuirá la información personal que es
                                        recopilada sin su consentimiento, salvo que sea requerido por un juez con un
                                        orden judicial.

                                        Sattlink ahora Enlace de Datos y Redes S.A de C.V. ("Sattlink" o "nosotros") Se
                                        reserva el derecho de cambiar los términos de la presente Política de Privacidad
                                        en cualquier momento.
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4  mt-auto" style="background-color: rgba(0,0,0,0.4);">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small text-white">
                        <div class="text-white">Copyright &copy; Sattlink <script>
                                document.write(new Date().getFullYear());

                            </script>
                        </div>
                        <div>
                            <a style="color:white;" href="{{URL::to('politica')}}">Políticas de privacidad</a>
                            &middot;
                            <a style="color:white;" href="{{URL::to('terminos')}}">Terminos &amp; Condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    
</body>
<style>
    
    .contenedor {
     
      overflow: scroll;
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
<script>
    $(document).ready(function() {
        function random(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }

        var spec = {
            backgrounds: [
                'torre1.jpg',
                'torre2.jpg',
                'torre3.jpg',
                'torre4.jpeg',
               

            ]
        };
        var i = random(0, spec.backgrounds.length - 1);
        var b = spec.backgrounds[i];
        /* 
        background-position: center;
      background-repeat: no-repeat;
      background-size: cover; */
        $('body').css('background-image', 'url("img/torres/' + b + '")');
        $('body').css('background-size', 'cover');
        $('body').css('background-position', 'center');
        $('body').css('background-repeat', 'no-repeat');

    });

</script>

</html>

{{-- @endsection
--}}
