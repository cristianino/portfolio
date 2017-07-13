var express = require('express');

var app = express();

app.get('/', inicio);
app.get('/curso', curso);
function inicio(peticion, resultado) {
  resultado.send('Este es el <strong>home</strong>');
}
function curso(peticion, resultado) {
  resultado.send('Este es el <strong>curso</strong>');
  console.log('consulta');
}
app.listen(8080);
