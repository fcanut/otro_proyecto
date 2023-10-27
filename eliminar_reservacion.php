<?php
require_once('conexionn.php');
$id    		= $_REQUEST['id']; 

$sqlDeleteEvento = ("DELETE FROM reservacion WHERE  id='" .$id. "'");
$resultProd = mysqli_query($con, $sqlDeleteEvento);

?>