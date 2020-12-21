<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sattlink</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}" />
    <script src='{{ asset('/js/a076d05399.js') }}'></script>
{{--     <link rel="stylesheet" href="{{asset('/css/w3.css')}}"> --}}
<script src="{{asset('/js/v4/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{asset('/js/v4/popper.min.js')}}"></script>
<script src="{{asset('/js/v4/bootstrap.min.js')}}"></script>
</head>

<body>

    <div class="card text-center">
        <div class="card-header">

        </div>
        <div class="card-body text-center">


            {{-- <img src="http://hotspot.sattlink.com/img/ifree.jfif" alt=""
                class="img-responsive" style="width: 100%;"> --}}
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-7 ">
                            {{--  aqui va el baner a lado de login --}}
                           
                                @php
                                $rad =rand(1,2);
                                //echo $rad;
                    
                                @endphp
                    
                                @if ($rad == 1)
                    
                                    @foreach ($carruseles->shuffle() as $item)
                                        @if ($item->url_imagen)
                                            @php
                                            $extension = pathinfo($item->url_imagen)['extension']
                                            @endphp
                                            @if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'jfif')
                                                {{-- queda pendiente mas formatos de imagen
                                                --}}
                                                <img class="mySlides w3-animate-fading " src="{{ asset($item->url_imagen) }}"
                                                    style="width:100%;  max-height: 450px;">
                    
                                            @else
                    
                    
                                            @endif
                    
                                        @endif
                    
                                    @endforeach
                                @else
                    
                                    <script src="https://cdn.jsdelivr.net/vue/2.1.3/vue.js"></script>
                    
                                    @php
                                    $video
                                    =App\Carrusel::where('activo','=',1)->where('url_imagen','like','%.mp4%')->orderByRaw('rand()')->take(1)->get();
                                    @endphp
                                    @foreach ($video as $i)
                                        <div id="app">
                                            <video src="{{ asset($i->url_imagen) }}" style="width: 100%; " id='video' controls muted
                                                autoplay='autoplay' class="movie">
                    
                                        </div>
                                        <script>
                    
                    
                                        </script>
                                    @endforeach
                    
                                @endif
                            
                            
                        </div>
                    </div>
                </div>
               
         
            <!-- <h1 class="card-title">EL MEJOR INTERNET  A SU ALCANCE</h1> -->
            <!--  <p class="card-text">SATTLINK SAN JUAN BAUTISTA TUXTEPEC.</p> -->
            <ul class="list-group">
                <li class="list-group-item"><a href="https://chat.whatsapp.com/G33tHdDoSWuLKfnUl3zrWn"
                        class="btn btn-sm btn-success animate__animated animate__headShake animate__infinite	infinite"><i
                            class='fab fa-whatsapp' style='font-size:18px'></i> Quiero contratar servicio
                        Residencial</a></li>
                <li class="list-group-item">Dudas e información</li>
                <li class="list-group-item"><a href="https://wa.me/522291738806"><i class='fab fa-whatsapp'
                            style='font-size:24px'></i> 229 173 88 06</a> </li>
                <li class="list-group-item">Gerente Rafael Nuñez Cuevas</li>
                <li class="list-group-item"><a href="https://wa.me/522291738806"><i class='fab fa-whatsapp'
                            style='font-size:24px'></i> 229 173 88 06</a></li>
                <li class="list-group-item">Horario de 9:00am a 5:00pm telefono de oficina: <a
                        href="tel:2878756019">2878756019</a></li>
            </ul>
        </div>
        <div class="card-footer text-muted">
            Sattlink © <script>
                document.write(new Date().getFullYear())

            </script>
        </div>
    </div>


 {{--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> --}}


    <script>
        var slideIndex = 0;
        carousel();



        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");

            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {
                slideIndex = 1
            }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 6000);
        }

    </script>

</body>

</html>
