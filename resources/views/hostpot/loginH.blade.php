<!DOCTYPE html>
<html lang="es">
<head>
  <title>Hostpot Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hotspot vista previa" />
      <meta name="author" content="Ing. Leonardo Maldonado López" />
    <!-- CSRF Token -->
    
    <link rel="icon" type="image/x-icon" href="{{asset('img/torre.ico')}}" />

  {{-- <link rel="stylesheet" href="{{asset('/host/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/w3.css')}}">
  <script src="{{asset('/host/jquery.min.js')}}"></script>
  <script src="{{asset('/host/js/bootstrap.min.js')}}"></script> --}}
  <link rel="stylesheet" href="{{asset('/css/v4/bootstrap.min.css')}}">
<script src="{{asset('/js/v4/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{asset('/js/v4/popper.min.js')}}"></script>
<script src="{{asset('/js/v4/bootstrap.min.js')}}"></script>
  @php
      $mac=$_POST['mac'];
   $ip=$_POST['ip'];
   $username=$_POST['username'];
   $linklogin=$_POST['link-login'];
   $linkorig=$_POST['link-orig'];
   $error=$_POST['error'];
   $chapid=$_POST['chap-id'];
   $chapchallenge=$_POST['chap-challenge'];
   $linkloginonly=$_POST['link-login-only'];
   $linkorigesc=$_POST['link-orig-esc'];
   $macesc=$_POST['mac-esc'];
  @endphp



  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      max-height: 450px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body>
  <!-- $(if chap-id) -->

	<form name="sendin" action="<?php echo $linkloginonly; ?>" method="post">
		<input type="hidden" name="username" />
		<input type="hidden" name="password" />
		<input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
		<input type="hidden" name="popup" value="true" />
	</form>
	
	<script type="text/javascript" src="{{asset('/js/md5.js')}}"></script>
	<script type="text/javascript">
	<!--
	    function doLogin() {
                <?php if(strlen($chapid) < 1) echo "return true;\n"; ?>
		document.sendin.username.value = document.login.username.value;
		document.sendin.password.value = hexMD5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
		document.sendin.submit();
		return false;
	    }
	//-->
	</script>
<!-- $(endif) -->



<div class="container">
    
<div class="row justify-content-center h-100">
  @include('modal.ads')

  <div class="col-sm-4">
    <!-- $(if trial == 'yes') -->
    <div class="alert alert-success" role="alert">
Conectate gratis   <a class="btn btn-lg btn-primary " id="gratis"  href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&username=T-<?php echo $macesc; ?>">Click aquí</span></a>
    </div>
<!-- $(endif) -->

    <!-- removed $(if chap-id) $(endif)  around OnSubmit -->
		<form name="login" action="<?php echo $linkloginonly; ?>" method="post" onSubmit="return doLogin()" >
			<input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
			<input type="hidden" name="popup" value="true" />
  
        <p>Inicie sesión para utilizar el servicio mikrotik hotspot</p>
        <div class="form-group">
          <label for="exampleInputEmail1">Login</label>
          <input name="username" type="text" value="<?php echo $username; ?>" class="form-control" id="username">
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
       
        <button type="submit" class="btn btn-primary">OK</button>
            <!-- $(if error) -->
            <br /><div style="color: #FF8080; font-size: 9px"><?php echo $error; ?></div>
            <!-- $(endif) -->
      </form>

   

  </div>
</div>
<hr>
</div>

<script type="text/javascript">
<!--
  document.login.username.focus();
//-->
</script>

<div class="container text-center">   

 
  
  
 
  
 
</div>

<div class="container text-center">    
  <h3></h3>
 
  <div class=" text-center">
    <center>
      <div class=" ">
      <img src="{{asset('img/logo.png')}}" class="img-responsive" style="width:15%" alt="Image">
        {{-- <p>Partner 1</p> --}}
      </div>

    </center>
  
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p> Av. Francisco I. Madero Lote 10, Departamento 5 Tercer Piso, Fracc. Los Angeles 1a Etapa C.P. 68370 Tuxtepec, Oaxaca <a href="tel:2878756019">(287)8756019</a></p>
</footer>

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
  setTimeout(carousel, 3000); 
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







