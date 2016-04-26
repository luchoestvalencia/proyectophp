
////agregar un evento que ejecuta el metodo getUsuarios al finalizar
//document.addEventListener('DOMContentLoaded',function() {
//	getUsuarios();
//}, false);



function getAjax(){
	var xmlhttp;
	if(window.XMLHttpRequest)
	{
		//code for IE7+, Firefox, chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// code for IE6, IE5
		xmlhttp= new ActiveXobject("Microsoft.XMLHTTP");
	}
	return xmlhttp;
}



function getUsuarios()
{
	// llamara al getuser.php
	var xmlhttp= getAjax();
	xmlhttp.onreadystatechange = function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
			{
			  document.getElementById("miTabla").innerHTML= xmlhttp.responseText;
			}
	}
	xmlhttp.open("GET", "/proyectophp/ServiciosPHP/getUsers.php",true);
	xmlhttp.send();

}

function login(argument) 
{
	var name = document.getElementById("nombreU").value;
	var pass= document.getElementById("password").value;

	if(name=="" || name==null || pass=="" || pass==null )
	{
	    alert("Ingrese datos validos");
		
	}
	else
	{
		var xmlhttp = getAjax();
		xmlhttp.open("POST", "/proyectophp/ServiciosPHP/login.php?username="+name+"&pass="+pass, true);
		xmlhttp.send();
		xmlhttp.onreadystatechange = function()
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				document.getElementById("respuestas").innerHTML=xmlhttp.responseText;
				//getUsuarios();
			}
		}
	}

}


function createUser()
{
	var name = document.getElementById("nombre").value;
	var username= document.getElementById("username").value;
	var pass= document.getElementById("pass").value;
	var pass2= document.getElementById("pass2").value;


	if(name=="" || name==null || username=="" || username==null || pass=="" || pass==null || pass2=="" || pass2==null )
	{
	    alert("Ingrese datos validos");
		
	}
	else
	{

		if (pass2 != pass) 
		{
			alert("Las contraseñas no coninciden");
		}
		else
		{

				if ( name.match(/^[A-z]+$/))	
					{
						var xmlhttp = getAjax();
						xmlhttp.open("POST", "/proyectophp/ServiciosPHP/createUser.php?nombre="+name+"&username="+username+"&pass="+pass, true);
						xmlhttp.send();
						xmlhttp.onreadystatechange = function()
						{
							if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
							{
								document.getElementById("respuestas").innerHTML=xmlhttp.responseText;
								//getUsuarios();
							}
						}
					}
					else
					{
						alert("El nombre debe contener solo letras");

					}
		}
		


	}

	
}

function createAdmin()
{
	var name = document.getElementById("nombre").value;
	var username= document.getElementById("username").value;
	var pass= document.getElementById("pass").value;
	var pass2= document.getElementById("pass2").value;


	if(name=="" || name==null || username=="" || username==null || pass=="" || pass==null || pass2=="" || pass2==null )
	{
	    alert("Ingrese datos validos");
		
	}
	else
	{

		if (pass2 != pass) 
		{
			alert("Las contraseñas no coninciden");
		}
		else
		{

				if ( name.match(/^[A-z]+$/))	
					{
						var xmlhttp = getAjax();
						xmlhttp.open("POST", "/proyectophp/ServiciosPHP/createAdmin.php?nombre="+name+"&username="+username+"&pass="+pass, true);
						xmlhttp.send();
						xmlhttp.onreadystatechange = function()
						{
							if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
							{
								document.getElementById("respuestas").innerHTML=xmlhttp.responseText;
								//getUsuarios();
							}
						}
					}
					else
					{
						alert("El nombre debe contener solo letras");

					}
		}
		


	}

}