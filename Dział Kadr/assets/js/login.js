'use strict';

const log = document.getElementById('log');
const pas = document.getElementById('pass');
const acc = document.getElementById('accept');
const mw = document.getElementById('mdl');
const mwcl = document.getElementById('cl-btn');

const Alog = 'admin';
const Apas = 'admin';

const Ulog = 'guest';
const Upas = '123';

function confirm(e) {
    if (log.value === Alog && pas.value === Apas) {
        setTimeout(function() {
            window.location.href = 'APanel.php';
        }, 1000);
    } else if (log.value === Ulog && pas.value === Upas) {
        setTimeout(function() {
            window.location.href = 'UPanel.html';
        }, 1000);
    } else {
        mw.style.display = 'block';
    }
}

function closeModal(e) {
    mw.style.display = 'none';
}
acc.addEventListener('click', confirm);
mwcl.addEventListener('click', closeModal);
