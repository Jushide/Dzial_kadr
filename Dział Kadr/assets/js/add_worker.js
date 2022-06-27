'use strict';

const mwop = document.getElementById('add');
const mw = document.getElementById('mdl1');
const mwcl = document.getElementById('cl-btn');


function addModal(e) {
    mw.style.display = 'block';
}

function closeModal(e) {
    mw.style.display = 'none';
}

mwop.addEventListener('click', addModal);
mwcl.addEventListener('click', closeModal);
