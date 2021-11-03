var btnClosePopupCon = document.getElementById('btnClose');

var overlay = document.getElementById('overlay');

btnClosePopupCon.addEventListener('click',closeMoadl);

function openMoadl() {
overlay.style.display='block';
}

function closeMoadl() {
overlay.style.display='none';
}