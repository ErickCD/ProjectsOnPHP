<?php
function connectDB(){
	$server = "localhost";
	$user = "root";
	$pass = "erick";
	$db = "foodmart";
	
	$conexion = mysqli_connect($server, $user, $pass, $db);
	
	if($conexion){
		echo 'La conexion a la base de datos se hizo de forma correcta';
	} else {
		echo 'Ha ocurrido un error inesperado en la base de datos';
	}
	
	return($conexion);
}

function disconnectDB($conexion){
	$close = mysqli_close($conexion);
	
	if($close){
		echo '<br>La conexion se ha cerrado de forma correcta';
	}else{
		echo 'Se ha producido un error al cerrar la base de datos';
	}
	echo("<br>");
	return($close);
}

function getArraySQL($sql){
	//Creamos la ccnexion con la funcion connectDB()
	$conexion = connectDB();
	
	//generamos la consulta
	mysqli_set_charset($conexion, "utf8"); //Formato de datos en utf8
	
	if(!$result = mysqli_query($conexion, $sql)) die();
	
	
	$rawData = array(); //Creamos un array
	
	//Se guardan en un arreglo multidimencional todos los datos
	
	$i = 0;
	
	while($row = mysqli_fetch_array($result)){
		$rawData[$i] = $row;
		$i++;
	}
	
	disconnectDB($conexion); //Desconectamos de la DB
	return $rawData; //Devolvemos el array
}

$sql = "select product_name, units_per_case, shelf_depth from product order by product_name limit 0, 40;";

$myArray = getArraySQL($sql);

echo json_encode($myArray);

?>