var x = 0;
var width = document.body.offsetWidth;
var widthless = width - 80;
var image = document.getElementById('kappa');
var amount = 8;
var richting = 1;
var achtergrondSnelheid = 50;


function add()
{
	amount = amount + 100;
	achtergrondSnelheid = achtergrondSnelheid - 5;

}


function start()
{
window.setTimeout('disco()',1);
window.setTimeout('moveRight()',1);
}


function disco()
{
document.body.style.backgroundColor="#"+((1<<24)*Math.random()|0).toString(16);
window.setTimeout('disco()',achtergrondSnelheid);
}

 
function moveRight()
{
 if(x > 0); 
 { 
 x = x + amount * richting
 image.style.left = x+'px';
 }

 if ((x+amount < widthless)) 
 {
  window.setTimeout('moveRight()',1);
 }
 
 else {
 richting = -1;
 window.setTimeout('moveRight()',1);
 }
 
 if(x < -1) 
 { 
 richting = 1;
 x = x + amount * richting
 image.style.left = x+'px';
 }
 
 

}