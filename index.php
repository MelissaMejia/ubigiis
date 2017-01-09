<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['image'];
 $image_name = $_POST['image_name'];
 $decodificarimagen=base64_decode("$image");

$fileName = "gs://${imagenes_ubigiis}/".$image_name.".JPG";
file_put_contents($fileName, $decodificarimagen);

echo "probando";
}
echo "probar";

  ?>
