'use strict';

const log = document.querySelector('.loginout');

function logout(e) {
    setTimeout(function() {
        window.location.href = 'Logowanie.html';
    }, 1000);
}

log.addEventListener('click', logout);
