function operacion(){
	var n1, n2, ope, resultado;
	n1 = document.getElementById("v1");
	n2 = document.getElementById("v2");
	ope = document.getElementById("op");
	resultado;
	
	if(ope.value == "+"){
		resultado = Number(n1.value) + Number(n2.value);
	} else if(ope.value == "-"){
		var resultado = Number(n1.value) - Number(n2.value);
	} else if(ope.value == "*"){
		var resultado = Number(n1.value) * Number(n2.value);
	} else {
		var resultado = Number(n1.value) / Number(n2.value);
	}
	
	document.getElementById("resultado").innerHTML = "El resultado es: " + resultado;
}