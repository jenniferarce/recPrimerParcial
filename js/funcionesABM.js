function GuardarUsuario()
{
		var id=$("#id").val();
		var correo=$("#correo").val();
		var clave=$("#clave").val();
		var nombre=$("#nombre").val();
		var tipo=$("input[name='tipo']:checked").val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarUsuario",
			id:id,
			correo:correo,
			clave:clave,
			nombre:nombre,
			tipo:tipo
		}
	});
	funcionAjax.done(function(retorno){
		mostrarListado();
		$("#informe").html("cantidad de agregados "+ retorno);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}//fin guardar

function BorrarUsuario(idParametro)
{
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarUsuario",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		mostrarListado();
		$("#informe").html("cantidad de eliminados "+ retorno);		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}//fin editar 

function  EditarUsuario(idParametro)
{
	mostrarDatos();
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerUsuariosId",
			id:idParametro	
		     }
	});
		
	funcionAjax.done(function(retorno){
		var user =JSON.parse(retorno);
		//alert(retorno);
		$("#id").val(user.id);
		$("#correo").val(user.correo);
		$("#clave").val(user.clave);
		$("#nombre").val(user.nombre);
		var tipo = voto.tipo;


										if(tipo=="admin")
										{
											$('input[id=tipo][value="admin"]').attr('checked', true); 
										}

										if(tipo=="user")
										{
											$('input[id=tipo][value="user"]').attr('checked', true); 
										}

	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);
		alert("error");		
	});	
}
