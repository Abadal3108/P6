<?php
error_reporting(E_ALL);

$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');
// creacion de tabla
//  $resultados = $conexion->query("CREATE TABLE aabadalg_V1_Personas3 (
//    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
//     Usuario varchar(255),
//     correo varchar(255),
//     contrasena varchar(255),
//     nacimiento date,
//     Admin BIT,
//     Imagen TEXT
// )");
// añadir valores
// for ($i=0; $i < 20; $i++) {
// 	$add = $conexion->query("insert into aabadalg_V1_Personas3(Usuario,correo,contrasena,nacimiento,Admin,Imagen)
// values ('Alex_".$i."','aabadal32_".$i."@gmail.com','alex132579',2003-08-08,1,'no')");
// }




if (!empty($_GET['page'])) {
    $resulta = $conexion->query("SELECT * FROM aabadalg_V1_Personas3 WHERE `id` < ".$_GET['page']." ORDER BY `Usuario` DESC LIMIT 3");
}
else{
    $resulta = $conexion->query("SELECT * FROM aabadalg_V1_Personas3 ORDER BY `Usuario` DESC LIMIT 3");
}

$last_id = 0;
foreach($resulta as $fila){
    // print_r($fila);
    $last_id = $fila['id'];
    echo $fila['Usuario'] . " - " .$fila['correo'] . '</br>';
    echo $fila['contrasena'] . " - " .$fila['correo'] . '</br>';
    echo $fila['nacimiento'] . " - " .$fila['correo'] . '</br>';
    echo $fila['Admin'] . " - " .$fila['correo'] . '</br>';
    echo $fila['Imagen'] . " - " .$fila['correo'] . '</br>';
}
// change this link http://localhost/alex/
?>

<a href="http://localhost:63342/P6/EX_02/verfoto.php?page=<?php echo($last_id) ?>">next</a>