var preke1 = {
  vardas: "Atsuktuvas",
  data: "2018",
  spalva: "geltona",
  kaina: "5 EUR"
}

var preke2 = {
  vardas: "Raktas",
  data: "2018",
  spalva: "pilka",
  kaina: "2 EUR"
}

var prekes = [preke1, preke2];

function spausdinuSarasa(masyvas){
  for (var i = 0; i < masyvas.length; i++) {
    console.log("#" + (i+1));
    console.log("Prekė: " + masyvas[i].vardas);
    console.log("Pagaminimo data: " + masyvas[i].data);
    console.log("Spava: " + masyvas[i].spalva);
    console.log("Kaina: " + masyvas[i].kaina);
  }
}

spausdinuSarasa(prekes);
