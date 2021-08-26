"use strict";
let taal = "nederlands";

function taalFrans() {
  document.querySelector(".frisdrank").innerHTML = "sans alcool";
  document.querySelector(".bier").innerHTML = "bières";
  document.querySelector(".wijn").innerHTML = "vin";
  document.querySelector(".sterkeDrank").innerHTML = "Apéritif";
  document.querySelector(".hapjes").innerHTML = "snacks";
  document.querySelector(".warm").innerHTML = "b. chaudes";
}

function taalEngels() {
  document.querySelector(".frisdrank").innerHTML = "Soft Drinks";
  document.querySelector(".bier").innerHTML = "beers";
  document.querySelector(".wijn").innerHTML = "wine";
  document.querySelector(".sterkeDrank").innerHTML = "Aperitif";
  document.querySelector(".hapjes").innerHTML = "snacks";
  document.querySelector(".warm").innerHTML = "hot drinks";
}
function taalnederlands() {
  document.querySelector(".frisdrank").innerHTML = "frisdrank";
  document.querySelector(".bier").innerHTML = "bieren";
  document.querySelector(".wijn").innerHTML = "wijnen";
  document.querySelector(".sterkeDrank").innerHTML = "Aperitieven";
  document.querySelector(".hapjes").innerHTML = "hapjes";
  document.querySelector(".warm").innerHTML = "warme dranken";
}

function init() {
  document.querySelector(".fa-language").addEventListener("click", function () {
    document.querySelector(".language").style.display = "block";
  });

  document.querySelector(".lang-ok").addEventListener("click", function () {
    document.querySelector(".language").style.display = "none";
  });

  document.querySelector(".nederlands").addEventListener("click", function () {
    document.querySelector("." + taal).classList.remove("actief");
    document.querySelector(".nederlands").classList.add("actief");
    taalnederlands();
    taal = "nederlands";
  });

  document.querySelector(".frans").addEventListener("click", function () {
    document.querySelector("." + taal).classList.remove("actief");
    document.querySelector(".frans").classList.add("actief");
    taalFrans();
    taal = "frans";
  });

  document.querySelector(".engels").addEventListener("click", function () {
    document.querySelector("." + taal).classList.remove("actief");
    document.querySelector(".engels").classList.add("actief");
    taalEngels();
    taal = "engels";
  });
}

window.onload = init;
