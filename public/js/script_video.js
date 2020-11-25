





/* document.getElementById('conectate').innerHTML ='Conectate gratis:' */
/* btn_activar sonido */
function quitar_muted() {
  $("#video").prop("muted", false);
}

document.getElementById('countdown').innerHTML = 'Espera a que termine el vídeo';
/* function para cuando se termina el video */
$("#video").bind("ended", function () {
 $("#gratis").removeClass("disabled"); 
 document.getElementById('countdown').innerHTML ='Click aquí';
 
 // alert("Ended!");
});
