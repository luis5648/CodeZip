
var color = document.querySelector('#theme');
var itemColor = color.options[color.selectedIndex].value;
var editor = ace.edit("editor");
editor.session.setMode("ace/mode/c_cpp");

//evento para cargar el tema al inicio de la página
window.addEventListener('load',()=>{

    editor.setTheme(`ace/theme/${itemColor}`);
});


//evento para cambiar el tema según la selección
color.addEventListener('change',(e)=>{

    editor.setTheme(`ace/theme/${e.target.value}`);

});

//bajar lo del textarea


var txt = document.querySelector('#editor');
document.getElementById('link').onclick = function(code) {
    this.href = 'data:text/none;charset=utf-8,'
        + encodeURIComponent(txt.innerText.substr(txt.innerText.indexOf("//Escribe tu código de c o c++ aqui!")));
};