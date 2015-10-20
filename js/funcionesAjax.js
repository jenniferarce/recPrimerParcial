function mostrarLogin()
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"mostrarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
	});
}//fin mostrar login
function registrar()
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"registrar"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
	});
}//fin 

function mostrarDatos()
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"mostrarDatos"}
	});

	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		$("#informe").html(retorno.responseText);	
	});
	//logout();
}//fin mostrarDatos

function mostrarListado()
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"mostrarListado"}
	});

	funcionAjax.done(function(retorno){

		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		$("#informe").html(retorno.responseText);	
	});
}//fin mostrarListado
