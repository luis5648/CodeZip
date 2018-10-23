function resizeHeaderOnScroll() {
  const distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 200,
  headerEl = document.getElementById('js-header');

  if (distanceY > shrinkOn) {
    headerEl.classList.add("smaller");
  } else {
    headerEl.classList.remove("smaller");
  }
}

window.addEventListener('scroll', resizeHeaderOnScroll);

function mensajeEmergente(){
alert("\t\t\tATENCIÓN !\nEnlace solo para usuarios registrados !!!");
}

function mensajeTwitt(){
  alert("\t\tTwitter Desactivado :(  !");
}

function mensajeContact(){
  alert("MAIL :all.developers.3nc0d3r5@gmail.com\n");
}

function restriccionUDGmail() {
  var Description = document.getElementById("EMAIL");
        if (Description.value =="^[_a-z0-9-]+(\\.[_a-z0-9-]"+"@alumnos.udg.mx") {
            alert("\tCorreo Valido!");
            Description.focus();
            return true;
        }
        alert("\tCoreo No Valido !!")
        return false;
    }
