// JavaScript Document
function proceso(){
	var nombre, json, acceso;
	nombre = document.getElementById("nombre");
	
	//Estructura JSON con un solo objeto.
	json = {"name" : nombre.value, "edad" : document.getElementById("edad").value, "sexo" : document.getElementById("sexo").value};
	
	acceso = json.name;
	
	document.getElementById("rnombre").innerHTML = "El nombre es: " + acceso;
	document.getElementById("redad").innerHTML = "La edad es: " + json.edad;
	document.getElementById("rsexo").innerHTML = "El sexo es: " +json.sexo;
}