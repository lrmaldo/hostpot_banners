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