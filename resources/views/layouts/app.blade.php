<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hostpot publicidad" />
      <meta name="author" content="Ing. Leonardo Maldonado López" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="img/torre.ico" />
    <title>Hostpot-Sattlink</title>

    <!-- Styles -->
    {{--
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{-- scripts js --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>


    {{-- scripts y css de datatables --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    {{-- icons --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav> --}}
        {{-- color de navbar sugerido #ff510094 --}}


        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">

                <a class="navbar-brand" href="/home">
                    <img src="{{ asset('img/logo.png') }}" width="100" height="30" class="d-inline-block align-top"
                        alt="" loading="lazy">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-right" id="navbarText">

                    <ul class="nav navbar-nav  ml-auto ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        


                        @else
                        @if(Auth::user()->hasRole('admin'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('usuario')}}">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('home')}}">Carrusel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('zonas')}}">Zonas</a>
                        </li>
                        <li class="nav-item">
                            <a  data-toggle="modal" data-target="#Modalconfig" class="nav-link" href="#" >Config.</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{-- {{route('torre.exportExcel')}} --}}">Exportar Excel</a>
                        </li>
                        @endif
                           

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    {{-- <a class="dropdown-item" href="#">Another
                                        action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    --}}
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>

            </div>

            @include('modal_config')

        </nav>

        @include('flash-message')
        @yield('content')
    </div>
    <style>
        .header {
            background: url(../img/torres/torre2.jpg) no-repeat center;
            background-size: cover;
            min-height: 100vh;
        }

        .oscuro {
            background-color: #1f1f1f;
            color: #f1eded;

        }

    </style>

    <!-- Scripts -->
    <script type="text/javascript">
        function cambiarModo() {
            var cuerpoweb = document.body;
            var div = document.getElementsByClassName('card');
            cuerpoweb.classList.toggle("oscuro");
            div.classList.toggle("oscuro");

        }

        $(document).ready(function() {
            /*  ahora=new Date("December 17, 1995 08:24:00");
             var hora=ahora.getHours();
             console.log(hora)

             if(hora>=20   ){
                 var elemento = document.getElementById("myTable_wrapper");
                 elemento.className += " table-dark";
             } */

        });

    </script>

</body>

</html>
