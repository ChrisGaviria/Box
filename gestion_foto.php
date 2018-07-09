<?php
include("clase_conexion.php");
$id=$_POST['id_foto'];
$nombre=$_POST['nombre_foto'];
$des=$_POST['des'];
$sub=(substr($id,-18));
$id_foto=str_replace(".jpg", "", $sub);
$consul="update fotos set id_foto=id_foto, nombre='$nombre', des='$des' where id_foto='$id_foto'";
$modifica=mysql_query($consul,$c);
print("<script>window.location.replace('index.php');</script>");  

?>