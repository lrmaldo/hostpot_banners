<!DOCTYPE html>
<html lang="es">
<head>
  <title>Hotspot Login - vista previa</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hotspot vista previa" />
      <meta name="author" content="Ing. Leonardo Maldonado López" />
    <!-- CSRF Token -->
    
    <link rel="icon" type="image/x-icon" href="{{asset('img/torre.ico')}}" />

 {{--  <link rel="stylesheet" href="{{asset('/host/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/w3.css')}}">
  <script src="{{asset('/host/jquery.min.js')}}"></script>
  <script src="{{asset('/host/js/bootstrap.min.js')}}"></script> --}}
 
  <link rel="stylesheet" href="{{asset('/css/v4/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/w3.css')}}">
  <script src="{{asset('/js/v4/jquery-3.2.1.slim.min.js')}}"></script>
  <script src="{{asset('/js/v4/popper.min.js')}}"></script>
  <script src="{{asset('/js/v4/bootstrap.min.js')}}"></script>
  <link
    rel="stylesheet"
href="{{asset('/css/animate.min.css')}}"
  />
<script src='{{asset('/js/a076d05399.js')}}'></script>
@if ($id_zona==4)
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3FCMF93KPT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3FCMF93KPT');
</script>
@else
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-04FYH8F9BQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-04FYH8F9BQ');
</script>  
@endif

  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .container {
      margin-top: 1%;
    }
     /* .mySlides {
      position: relative;
      height:40%;
    } */
   

    /* Hide the carousel text when the screen is less than 600 pixels wide */
              @media screen and (max-width: 991px) {
                  /* start of large tablet styles */
                  .img-responsive {
                    min-width: 70%;
                    min-height: 40%;
                    max-width: 100%;
                   
                  }
              }

          @media screen and (max-width: 767px) {
                /* start of medium tablet styles */
                /* Adding a fixed/percentage min-width could ensure that the image doesn't get too small */
                .img-responsive {
                  min-width: 30%;
                  max-width: 100%;
                  min-height: 40%;
                 
                }
            }

          @media screen and (max-width: 479px) {
          /* start of phone styles */
          /* It's possible to hide the image if the screen becomes too small */
          .img-responsive {
            min-width: 10%;
            max-width: 100%;
            min-height: 40%;
          
          }
        
}

  </style>
</head>
<body>
  
<div class="container">
    <div class="alert alert-success" role="alert">
 <strong> <h3 class="text-center">Vista previa </h3></strong>
    </div>
<div class="row">
  <div class="col-sm-7">
    {{--  aqui va el baner a lado de login --}}
    <style>

      .square {
        position: relative;
        width: 100%;
        
      }

      .square:after {
        content: '';
        display: block;
        padding-bottom: 100%;
       
      }

      .content {
        position: absolute;
        width: 100%; 
        height: 90%;
        justify-content: center;
        align-self: center;
        align-items: center;
        
      }
      .img-responsive{
        max-height: 90%;
      }
  </style>  
  <div class="w3-content w3-section" style="width:100%; ">
      <div class="square"> 
        <div class="content"> 
        
      
      
   

            @foreach ($carruseles->shuffle() as $item)
            @if ($item->url_imagen)
                @php
                    $extension = pathinfo($item->url_imagen)['extension']
                @endphp
                @if ($extension=="jpg"|| $extension =="jpeg" || $extension =='png' || $extension == 'jfif' ){{-- queda pendiente mas formatos de imagen --}}

              
              
                {{-- imagen  --}}

                <img class="mySlides w3-animate-fading img-responsive " width="100%" src="{{asset($item->url_imagen)}}" >
              
                    
                @else
                
                    
                @endif
                
            @endif
        
          @endforeach
      </div> 
    </div>
        
  
  </div>


    
  </div>
  <div class="col-sm-4">
   
    <div class="alert alert-success" role="alert">
Conectate gratis en:  <a class="btn btn-lg btn-primary disabled" id="gratis"  href=""><span id="countdown"></span></a>
    </div>
    {{-- <a href="https://chat.whatsapp.com/G33tHdDoSWuLKfnUl3zrWn" class="btn btn-sm btn-success animate__animated animate__headShake animate__infinite	infinite"><i class='fab fa-whatsapp' style='font-size:18px'></i> Quiero contratar servicio Residencial</a> --}}
   {{--  
    <fb:login-button 
    scope="public_profile,email"
    onlogin="checkLoginState();">
    </fb:login-button> --}}
    <div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="true"></div>


    
		<form class=""  name="login" action="" method="post" onSubmit="return doLogin()" >
			<input type="hidden" name="dst" value="" />
			<input type="hidden" name="popup" value="true" />
  
        <p>Inicie sesión para utilizar el servicio mikrotik hotspot</p>
        <div class="form-group">
          <label for="exampleInputEmail1">Login</label>
          <input name="username" type="text" value="" class="form-control" id="username">
          <small id="emailHelp" class="form-text text-muted">.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input  name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1"> <a href="{{url('politica')}}">Acepto los terminos y condiciones</a> </label>
        </div>
       
        <button type="submit" class="btn btn-primary disabled">OK</button>
            <!-- $(if error) -->
            <br /><div style="color: #FF8080; font-size: 9px"></div>
            <!-- $(endif) -->
      </form>

   <style>
       
   </style>

  </div>
</div>
<hr>
</div>

<script type="text/javascript">

  document.login.username.focus();

</script>

 <div class="container text-center">   

 
  
  
  
 
</div>

<div class="container text-center">    
  <h3></h3>
  <br>
  <div class=" text-center">
    <center>
      <div class=" ">
      <img src="{{asset('img/logo.png')}}"  style="width:55%" alt="Image">
        {{-- <p>Partner 1</p> --}}
      </div>

    </center>
  
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p> Av. Francisco I. Madero Lote 10, Departamento 5 Tercer Piso, Fracc. Los Angeles 1a Etapa C.P. 68370 Tuxtepec, Oaxaca <a href="tel:2878756019">(287)8756019</a></p>
</footer>

{{-- <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '167968248406568',
      cookie     : true,
      xfbml      : true,
      version    : 'v9.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/es_ES/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


   FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});
</script> --}}
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v9.0&appId=167968248406568&autoLogAppEvents=1" nonce="x13cXpvr"></script>


</body>
</html>

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
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 6000); 
}






</script>


<script src="{{asset('js/cuenta.js')}}"></script>


{{-- 
 @if ($carruseles != null)
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        
        @foreach ($carruseles as $key => $item)
        <li data-target="#myCarousel" data-slide-to="{{$item->id}}" class="@if($key == 0)active @endif"></li>
        @endforeach
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        @foreach ($carruseles as $key => $item)
        
        <div class="item @if($key == 0)active @endif" >
 
          <picture>
            <source srcset="{{asset($item->url_imagen)}}" media="(min-width: 1400px;max-height: 30%;)">
            <source srcset="{{asset($item->url_imagen)}}" media="(min-width: 768px;max-height: 30%;)">
            <source srcset="{{asset($item->url_imagen)}}" media="(min-width: 576px; max-height: 30%;)">
          
          <img class="image" class="mh-100" srcset="{{asset($item->url_imagen)}}" style="
           
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            margin: auto;
          ">
          </picture>
            
          
         
          <div class="carousel-caption">
          
          </div>      
        </div>
      
        @endforeach
       

     
      </div>
    

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    @endif




login ***********************************************************



--}}







