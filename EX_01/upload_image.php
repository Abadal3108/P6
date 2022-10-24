<?php
error_reporting(E_ALL);

$conexion = new PDO('mysql:host=fmesasc.com;dbname=daw2', 'daw2', 'Gimbernat');

if (!empty($_FILES['image'])) {
	$ar = explode('.', $_FILES['image']['name']);
	if (!empty($ar) && is_array($ar)) {
		$ex = $ar[count($ar) - 1];
		$name = 'images/'.rand(1111,22222)."_image.".$ex;
		move_uploaded_file($_FILES['image']['tmp_name'], $name);
		$query = "UPDATE `aabadalg_V1_Personas3` SET `Imagen`='".$name."' WHERE id = '1'";
		$add = $conexion->query($query);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="image">
		<button type="submit">Submit</button>
	</form>
	

</body>
</html>