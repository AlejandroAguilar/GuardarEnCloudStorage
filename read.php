<?php

require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;

$object_image_file = 'gs://contenedor-bucket/Marca.png';
$object_image_url = CloudStorageTools::getImageServingUrl($object_image_file);

header('Location:' .$object_image_url);

//
/*
$object_image_file2 = 'gs://contenedor-bucket/difuso.jpeg';
$object_image_url2 = CloudStorageTools::getImageServingUrl($object_image_file2);

header('Location:' .$object_image_url2);

echo "<script>console.log( 'Debug1 : " . $object_image_url . "' );</script>";
*/
?>

<div class="content">
<?php
echo "<p id="imagen1" class=\"SomeSpaceDude\">Hey Yes! ".$object_image_url." !</p>";
echo"<br>";

echo"</div>";
?> 
   