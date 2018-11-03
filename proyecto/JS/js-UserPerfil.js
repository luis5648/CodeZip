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

  
  function abrirContenido(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}