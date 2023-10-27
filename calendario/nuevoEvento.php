<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");
//$hora = date("g:i:A");

require("config.php");
$evento            = ucwords($_REQUEST['evento']);
$f_evento          = $_REQUEST['fecha_evento'];
$fecha_evento      = date('Y-m-d', strtotime($f_evento)); 
$color_evento      = $_REQUEST['color_evento'];


$InsertNuevoEvento = "INSERT INTO eventoscalendar(
      evento,
      fecha_evento,
      color_evento
      )
    VALUES (
      '" .$evento. "',
      '". $fecha_evento."',
      '" .$color_evento. "'
  )";
$resultadoNuevoEvento = mysqli_query($con, $InsertNuevoEvento);

header("Location:index.php?e=1");

?>