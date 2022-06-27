"use strict";

let op = document.getElementById("open");
let cl = document.getElementById("close");
let side = document.getElementById("side");
let dark = document.getElementById("dark");

function otworz(e) {
  side.style.setProperty("left", "0");
}

function zamknij(e) {
  side.style.setProperty("left", "-100%");
}

op.addEventListener("click", otworz);
cl.addEventListener("click", zamknij);
