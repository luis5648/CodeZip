
  function mensajeEmergente(){
  alert("\t\t\tATENCIÓN !\nEnlace solo para usuarios registrados !!!");
  }
  
  function mensajeTwitt(){
    alert("\t\tTwitter Desactivado :(  !");
  }
  
  function mensajeContact(){
    alert("MAIL :all.developers.3nc0d3r5@gmail.com\n");
  }

  
  function abrirContenido(evt, pestaña) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(pestaña).style.display = "block";
    evt.currentTarget.className += " active";
}




function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
} 
   
function IraHome() {
  var txt;
  if (confirm("¿Recargar Página ?")) {
      window.location="User.php"
  } else {
      txt = "You pressed Cancel!";
  }
  
}

function clickPerfilUser(){
  document.getElementById("T01").click();
}
function clickCurso(){
  document.getElementById("T02").click();
}
function clickMaterial(){
  document.getElementById("T03").click();
}