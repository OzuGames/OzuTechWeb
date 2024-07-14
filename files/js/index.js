window.onload = function(){
    $('#onload').fadeOut();
}

//actu
function abriraviso(){
  document.getElementById("aviso").style.display="block";
  
}
function cerraraviso(){
  document.getElementById("aviso").style.display="none";
  
}


// Boton izquierda
const botonMenu = document.querySelector("#boton-menu");
const menu = document.querySelector("#menu");

botonMenu.addEventListener("click", function() {
  menu.classList.toggle("mostrar");
});


// sidebar toggle
const btnToggle = document.querySelector('.toggle-btn');

btnToggle.addEventListener('click', function () {
  console.log('clik')
  document.getElementById('sidebar').classList.toggle('active');
  console.log(document.getElementById('sidebar'))
});




var cookieBannerSliderPos = 0;

function showCookieBanner() {
    var cookiebanner = document.getElementById("cookiebanner");
    var dialogHeight = parseInt(cookiebanner.offsetHeight);
    cookiebanner.style.bottom = (cookieBannerSliderPos - dialogHeight) + "px";
    cookieBannerSliderPos += 4;
    if (cookieBannerSliderPos < dialogHeight) {
        setTimeout(function () {
            showCookieBanner();
        }, 1);
    } else {
        cookieBannerSliderPos = 0;
        cookiebanner.style.bottom = "0px";
    }
}

function hideCookieBanner() {
    var cookiebanner = document.getElementById("cookiebanner");
    cookiebanner.style.display = "none";
}


