<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario</title>
</head>

<body>

<label for="nombre" >Nombre:</label>
<input onKeyUp="proceso()" type="text" name="nombre" id="nombre" />
<br>
<label for="edad" >Edad:</label>
<input onKeyUp="proceso()" onChange="proceso()" type="number" name="edad" id="edad" />
<br>
<label for="sexo" >Sexo:</label>
<select onChange="proceso()" name="sexo" id="sexo">
	<option value="Femenino">Femenino</option>
	<option value="Masculino">Masculino</option>
</select>

<input onClick="proceso()" type="button" value="Ver"/>

<br><br><br>
<div id="rnombre"></div>
<div id="redad"></div>
<div id="rsexo"></div>

<script src="funcion.js"></script>

</body>
</html>