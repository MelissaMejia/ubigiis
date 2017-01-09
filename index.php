<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['image'];
 $image_name = $_POST['image_name'];
 $decodificarimagen=base64_decode("$image");

$fileName = "gs://${imagenes_ubigiis}/".$image_name.".JPG";
if (file_put_contents($fileName, $decodificarimagen)){
 echo "subido";
}else{
echo "no carga";
}}
echo "prueba";

  ?>
