// alert('Jus laimejote 10000000 EUR!!');

var message = "Laimejimas!";
// alert(message);

var objektas = {"name":"Jonas", "surname":"Jonaitis"};

alert(objektas.name + " " + objektas.surname);

// String tipas
var tekstas = "tekstas";

// Number tipas
var skaicius = 5;
var skaicius2 = 20;

//Boolean tipas
var arPilnatis = true;

//Neapibreztas tipas
var nera;

//Funkcinis tipas (funkcija)
var sudetis = function(x, y){
  alert(x+y);
}

sudetis(5, 10);

function atimtis(x, y){
  alert(x-y);
}

//funkcija, kuri grazina rezultata
function sudetis2(x, y){
  return x+y;
}

var sum = sudetis2(5, 18);

console.log(sum);
