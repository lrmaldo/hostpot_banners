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
   

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    
</body>



    <style>
        .fundo{
  animation: scales 3s alternate  infinite;
  transform-origin: center;
}
.pao-baixo{
   animation: rotatepao 14s cubic-bezier(.1,.49,.41,.97)  infinite;
  transform-origin: center;
}
.pao-cima{
   animation: rotatepao 7s 1s cubic-bezier(.1,.49,.41,.97)  infinite;
  transform-origin: center;
}
.olhos{animation: olhos   2s  alternate  infinite;
   transform-origin: center;
}

.left-sparks{animation: left-sparks   4s  alternate  infinite;
      transform-origin: 150px 156px;
}

.right-sparks{animation: left-sparks   4s  alternate  infinite;
      transform-origin: 310px 150px;
}

.olhos{animation: olhos   2s  alternate  infinite;
   transform-origin: center;
}
@keyframes scales{
  from { transform: scale(0.98)}
  to{ transform: scale(1)}
}

@keyframes rotatepao{
  0% { transform:  rotate(0deg)}
  50% , 60%{ transform:  rotate(-20deg)}
  100%{  transform:  rotate(0deg) }
 
}

@keyframes olhos{
  0%{
    transform: rotateX(0deg);
  }
   100%{
    transform: rotateX(30deg);
  }
}

@keyframes left-sparks{
  0%{
    opacity: 0; 
  }
  
}


.main{
  
  min-height: 600px;
  margin: 0px auto;
  width: auto;
  max-width: 460px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.path {
  stroke-dasharray: 300;
  stroke-dashoffset: 300;
  animation: dash 4s   alternate infinite;
}

@keyframes dash{
   0%, 30%{
     fill: 4B4B62;
    stroke-dashoffset:   0;
  }
   80%,100%{
     fill: transparent;
    stroke-dashoffset:  -200;
  }
   
  
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






<div class="main card shadow-lg border-0 rounded-lg mt-5 text-white"  style="background-color: rgba(0,0,0,0.6);"> 
   <h2 class="text-center">Página no encontrada</h2> 
<div class=""> 
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="470" height="290" viewBox="0 0 470 290">
        <defs>
            <path class="fundo" id="prefix__a" d="M5.063 128.67c-2.513 15.192 5.633 31.093 17.898 38.941 5.99 3.832 13.34 6.528 16.471 13.254 4.868 10.452-3.879 22.437-13.113 28.515-9.236 6.078-20.5 10.9-24.704 21.683-2.771 7.108-1.685 15.387 1.058 22.507 10.06 26.112 39.393 37.547 65.479 36.15 26.086-1.396 50.827-12.407 76.416-18.075 87.873-19.465 180.005 24.717 267.728 4.47 13.65-3.151 27.4-8.081 37.943-17.99 11.883-11.167 18.632-28.016 19.65-45.023.97-16.225-4.34-34.495-17.744-41.806-7.834-4.273-17.196-4.1-25.7-1.774-5.43 1.483-10.767 3.808-16.369 3.848-5.601.038-11.763-3-13.386-8.808-1.707-6.107 2.182-12.41 6.642-16.577 9.072-8.474 21.203-12.707 29.441-22.126 7.927-9.063 11.264-22.574 8.574-34.716-2.692-12.141-11.326-22.538-22.188-26.715-27.683-10.645-57.844 18.377-86.152 9.873-2.101-.63-4.312-1.605-5.418-3.641-1.08-1.988-.834-4.51-.214-6.716 3.468-12.348 16.939-20.21 17.528-33.102.32-7.008-3.504-13.564-8.325-18.251-33.126-32.2-81.125 6.102-114.9 18.194-55.542 19.884-112.157 36.49-167.849 55.963-20.81 7.275-44.91 18.606-48.766 41.922z"/>
        </defs>
        <g fill="none" fill-rule="evenodd">
            <path fill="#FFF" d="M0 0H1366V800H0z" transform="translate(-448 -157)"/>
            <g transform="translate(-448 -157) translate(448 157)">
                <mask id="prefix__b" fill="#fff">
                    <use xlink:href="#prefix__a"/>
                </mask>
                <use fill="#F6F6F7" xlink:href="#prefix__a"/>
                <path fill="#EDEDF0" fill-rule="nonzero" d="M-14.199 211.2H481.36V301.2H-14.199z" mask="url(#prefix__b)"/>
                 <g class="paes">
              
                  
                   <g class="olhos">
                       <path fill="#633" d="M51.976 32.505c.27 2.748-1.735 5.197-4.476 5.47-2.748.274-5.199-1.732-5.476-4.48-.27-2.748 1.735-5.197 4.483-5.47 2.748-.274 5.192 1.733 5.469 4.48M93.976 28.505c.27 2.748-1.735 5.197-4.483 5.47-2.748.273-5.192-1.733-5.469-4.48-.27-2.748 1.735-5.197 4.483-5.47 2.748-.274 5.192 1.733 5.469  4.48M65.03 45.127c2.1-5.726 9.106-6.606 13.113-2.171.408.462-.277 1.204-.725.77-3.981-3.892-9.17-2.951-11.83 1.745-.187.333-.68-.002-.558-.344 " transform="translate(161 68)"/>
                     
                     </g>
              </g>
                </g>
                <g fill-rule="nonzero" stroke="#979797" stroke-linecap="round" stroke-width="1.8" class="left-sparks">
                    <path d="M23.684 5.789L30 1.158" transform="rotate(-90 157 13)"/>
                    <path d="M0 5.789L6.316 1.158" transform="rotate(-90 157 13) matrix(-1 0 0 1 6.316 0)"/>
                    <path d="M15.789 4.632L15.789 0" transform="rotate(-90 157 13)"/>
                </g>
                <g fill-rule="nonzero" stroke="#979797" stroke-linecap="round" stroke-width="1.8" class="right-sparks">
                    <path d="M23.684 5.789L30 1.158" transform="matrix(0 -1 -1 0 318 170)"/>
                    <path d="M0 5.789L6.316 1.158" transform="matrix(0 -1 -1 0 318 170) matrix(-1 0 0 1 6.316 0)"/>
                    <path d="M15.789 4.632L15.789 0" transform="matrix(0 -1 -1 0 318 170)"/>
                </g>
                 <path fill="#4B4B62" class="path" fill-rule="nonzero" stroke="#4B4B62" stroke-width="2" d="M198.754 186c1.56 0 2.246-.703 2.246-2.3v-41.4c0-1.597-.686-2.3-2.246-2.3h-9.608c-1.56 0-2.247.703-2.247 2.3v19.678h-5.802c-1.185 0-1.934-.83-1.934-2.172V142.3c0-1.597-.686-2.3-2.246-2.3h-9.67c-1.56 0-2.247.703-2.247 2.3v22.425c0 7.283 3.244 10.606 11.355 10.606H186.9v8.369c0 1.597.687 2.3 2.247 2.3h9.608zm32.277 1c15.3 0 18.969-5.248 18.969-13.056V152.12c0-7.808-3.67-13.12-18.969-13.12-15.3 0-19.031 5.312-19.031 13.12v21.824c0 7.808 3.732 13.056 19.031 13.056zm.969-12c-4.25 0-5-1.27-5-2.986v-17.091c0-1.652.75-2.923 5-2.923 4.313 0 5 1.27 5 2.923v17.09c0 1.716-.688 2.987-5 2.987zm62.754 11c1.56 0 2.246-.703 2.246-2.3v-41.4c0-1.597-.686-2.3-2.246-2.3h-9.608c-1.56 0-2.247.703-2.247 2.3v19.678h-5.802c-1.185 0-1.934-.83-1.934-2.172V142.3c0-1.597-.686-2.3-2.246-2.3h-9.67c-1.56 0-2.247.703-2.247 2.3v22.425c0 7.283 3.244 10.606 11.355 10.606H282.9v8.369c0 1.597.687 2.3 2.247 2.3h9.608z"/>
            </g>
        </g>
    </svg>
     
      
    </div>
     
      
    </div>