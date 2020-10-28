window.onload = updateClock;

document.getElementById("gratis").disabled = true;
var totalTime = 10;
function updateClock() {
document.getElementById('countdown').innerHTML = totalTime;
if(totalTime==0){
//alert('Final');
$("#gratis").removeClass("disabled"); 
 document.getElementById('countdown').innerHTML ='Click aquí';
}else{
totalTime-=1;
setTimeout("updateClock()",1000);
}
}

/* 

 var slide = 0;
carousel1(); 

function carousel1() {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slide++;
  if (slide > x.length) {slide = 1} 
  x[slide-1].style.display = "block"; 
  setTimeout(carousel1, 5000); 
}

 */