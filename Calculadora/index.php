<!doctype html>
<html>
<head>
<meta charset=utf-8>
<title>Calculadora</title>
</head>
<body>
<?php
echo //La primera entrada de texto
"<input onChange=\"operacion()\" onKeyUp=\"operacion()\" type=\"number\" id=\"v1\" name=\"v1\">\n";
	
	echo
		//La seleccion del operador 
	"<select onChange=\"operacion()\" id=\"op\" name=\"op\">
		<option value=\"+\">+</option>
		<option value=\"-\">-</option>
		<option value=\"*\">*</option>
		<option value=\"/\">/</option>
	</select>
	
<input onChange=\"operacion()\" onKeyUp=\"operacion()\" type=\"number\" id=\"v2\" name=\"v2\">


<input onClick=\"operacion()\" type=\"submit\" value=\"=\"/>

<p id=\"resultado\"></p>";
?>

<?php
echo '<script src="sumaValores.js" type="text/javascript"></script>';
?>
</body>
</html>