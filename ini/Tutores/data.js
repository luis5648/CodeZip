


//función al cargar la página
$(document).ready(function () {
	$.ajax({
		type: 'GET',
		url: 'problemas_api/get.php',

		success: function(response){
			let datos = JSON.parse(response);
			
			tableD = ''
			datos.forEach(element =>{
				tableD += `
				<tr idP="${element.id}">

					<td>${element.id}</td>
					<td>${element.nombre}</td>
					<td>${element.enunciado}</td>
					<td><a href="#" class="Eliminar">Eliminar</a></td>
				
				</tr>								
				`
				$('#tablaB').html(tableD);
				
			});

		}
	});

});

$('#subirP').click(function (evObject) {
	var nombreP = $('#nombreP').val();
	var problema = $('#problemaE').val();



	if (nombreP.length == 0 || problema.length == 0) {
		alert("Debe ingresar el problema y su nombre antes de subirlo")
	} else {
		//codigo pa enviar xd
		
		$.ajax({
			type: 'POST',
			url: 'problemas_api/inst.php',
			data:{nombreP,problema},

			success: function(response){
				let datos = JSON.parse(response);
				alert(datos.situation);
				
			}
		});

	}
});


//eliminar
$(document).on('click','.Eliminar', function (){
	let elemento = $(this)[0].parentElement.parentElement;
	let identifier = $(elemento).attr('idP');

	if(confirm("Está seguro que desea eliminar el problema?")){
		window.location = "problemas_api/del.php?w="+btoa(identifier);
		
	}
});

