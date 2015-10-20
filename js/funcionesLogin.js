function logout()
{
	var funcionAjax=$.ajax({
		url:"php/logout.php",
		type:"post",	
	});
	funcionAjax.done(function(retorno){
			//MostarBotones();
			mostrarLogin();
			$("#correo").val("Sin usuario.");
			$("#BotonLogin").html("Login<br>-Sesión-");
			$("#BotonLogin").removeClass("btn-danger");
			$("#BotonLogin").addClass("btn-primary");		
	});	
}

function validarLogin()
{
		var varUsuario=$("#correo").val();
		var varClave=$("#clave").val();

	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			correo:varUsuario,
			clave:varClave}
		});
	funcionAjax.done(function(retorno){
		alert(retorno);
		if(retorno="No-esta"){
			mostrarLogin();
			//registrar();
			$("#correo").html(retorno);
		}
		else{}
	});
	funcionAjax.fail(function(retorno){

	});
}