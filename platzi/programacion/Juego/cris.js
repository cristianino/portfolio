var teclas = {
  UP: 38,
  DOWN: 40,
  LEFT: 37,
  RIGHT: 39
};
document.addEventListener("keydown", moverLobo);
var vp = document.getElementById('villacris');
var papel = vp.getContext('2d');
var xl = 200;
var yl = 200;
var fondo = {
  url:'tile.png',
  cargaOk:false,
  dibujado:false
};
var vaca ={
  url:'vaca.png',
  cargaOk:false,
  dibujado:false
};
var cerdo ={
  url:'cerdo.png',
  cargaOk:false,
  dibujado:false
};
var pollo ={
  url:'pollo.png',
  cargaOk:false,
  dibujado:false
};
var lobo ={
  url:'lobo.png',
  cargaOk:false,
  dibujado:false
};
var cantidadVacas=aleatorio(5,20);
var cantidadCerdos=aleatorio(5,20);
var cantidadPollos=aleatorio(5,20);
fondo.imagen = new Image();
fondo.imagen.src=fondo.url;
fondo.imagen.addEventListener('load', cargarFondo);

vaca.imagen = new Image();
vaca.imagen.src=vaca.url;
vaca.imagen.addEventListener('load', cargarVaca);

cerdo.imagen = new Image();
cerdo.imagen.src=cerdo.url;
cerdo.imagen.addEventListener('load', cargarCerdo);

pollo.imagen = new Image();
pollo.imagen.src=pollo.url;
pollo.imagen.addEventListener('load', cargarPollo);

lobo.imagen = new Image();
lobo.imagen.src=lobo.url;
lobo.imagen.addEventListener('load', cargarLobo);

function cargarFondo(){
  fondo.cargaOk=true;
  dibujar();
}
function cargarVaca(){
  vaca.cargaOk=true;
  dibujar();
}
function cargarCerdo(){
  cerdo.cargaOk=true;
  dibujar();
}
function cargarPollo(){
  pollo.cargaOk=true;
  dibujar();
}
function cargarLobo(){
  lobo.cargaOk=true;
  dibujar();
}
function dibujar(xinicial, yinicial, xfinal, yfinal){
    if (fondo.cargaOk) {
      papel.drawImage(fondo.imagen,0,0);
      fondo.dibujado=true;
    }
    if (vaca.cargaOk) {

      console.log('Cantidad de vacas: '+cantidadVacas);
      for (var i = 0; i < cantidadVacas; i++) {
        //500/80 = 6.25
        //para dejarlo con margen 420/80=5.25
        var x =aleatorio(0, 7);
        var y =aleatorio(0, 7);
        x = x*60;
        y=y*60;
        papel.drawImage(vaca.imagen,x,y);
        vaca.dibujado=true;
      }

    }if (cerdo.cargaOk) {

      console.log('Cantidad de cerdos: '+cantidadCerdos);
      for (var i = 0; i < cantidadCerdos; i++) {
        //500/80 = 6.25
        //para dejarlo con margen 420/80=5.25
        var x =aleatorio(0, 7);
        var y =aleatorio(0, 7);
        x = x*60;
        y=y*60;
        papel.drawImage(cerdo.imagen,x,y);
        cerdo.dibujado=true;
      }

    }if (pollo.cargaOk) {

      console.log('Cantidad de pollos: '+cantidadPollos);
      for (var i = 0; i < cantidadPollos; i++) {
        //500/80 = 6.25
        //para dejarlo con margen 420/80=5.25
        var x =aleatorio(0, 7);
        var y =aleatorio(0, 7);
        x = x*60;
        y=y*60;
        papel.drawImage(pollo.imagen,x,y);
        pollo.dibujado=true;
      }

    }if (lobo.cargaOk) {

      console.log('Mover lobo');

      papel.drawImage(lobo.imagen,xl,yl);
      lobo.dibujado=true;
    }

}
function moverLobo(evento){
  var movimiento = 5;
  switch(evento.keyCode)
  {
    case teclas.UP:
      dibujar(xl, yl, xl, yl - movimiento);
      yl = yl - movimiento;
    break;
    case teclas.DOWN:
      dibujar( xl, yl, xl, yl + movimiento);
      yl = yl + movimiento;
    break;
    case teclas.LEFT:
      dibujar( xl, yl, xl - movimiento, yl);
      xl = xl - movimiento;
    break;
    case teclas.RIGHT:
      dibujar(xl, yl, xl + movimiento, yl);
      xl = xl + movimiento;
    break;
  }
}
function aleatorio(min, maxi) {
  var resultado = Math.floor(Math.random()*(maxi-min+1))+min;
  return resultado;
}
