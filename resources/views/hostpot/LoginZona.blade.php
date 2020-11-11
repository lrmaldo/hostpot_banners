<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hostpot publicidad" />
      <meta name="author" content="Ing. Leonardo Maldonado López" />
    <!-- CSRF Token -->
    
    <link rel="icon" type="image/x-icon" href="img/torre.ico" />
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
  


  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .container {
      margin-top: 1%;
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
<div class="row">
  <div class="col-sm-7">
    {{--  aqui va el baner a lado de login
    <a href="https://chat.whatsapp.com/G33tHdDoSWuLKfnUl3zrWn" class="btn btn-sm btn-success animate__animated animate__headShake animate__infinite	infinite"><i class='fab fa-whatsapp' style='font-size:18px'></i> Quiero contratar servicio residencial</a>
     --}}
    <div class="w3-content w3-section" style="max-width:500px">
      @foreach ($carruseles->shuffle() as $item)
      <img class="mySlides w3-animate-fading" src="{{asset($item->url_imagen)}}" style="width:100%;  max-height: 450px;">
    
       @endforeach
      
 
        </div>


    
  </div>
  <div class="col-sm-4">
    <!-- $(if trial == 'yes') -->
    <div class="alert alert-success" role="alert">
Conectate gratis en:  <a class="btn btn-lg btn-primary disabled" id="gratis"  href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&username=T-<?php echo $macesc; ?>"><span id="countdown"></span></a>
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

</div>

<script type="text/javascript">
<!--
  document.login.username.focus();
//-->
</script>

 <div class="container text-center">   

 

  <center>
    <div class="w3-content" style="max-width:400px">

    {{--   @foreach ($banners as $key => $item) 
      
    <img class="mySlides" src="{{asset($item->url_imagen)}}" style="width:100%;  max-height: 450px;">
      
      @endforeach
  --}}

 

</div>
  </center>
  
  <hr>
</div>

<div class="container text-center">    
  <h3></h3>
  <br>
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
  setTimeout(carousel, 4000); 
}






</script>


<script src="{{asset('js/cuenta.js')}}"></script>









