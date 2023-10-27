<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");

include('config.php');
                        
$idEvento         = $_POST['idEvento'];

$evento            = ucwords($_REQUEST['evento']);
$f_evento          = $_REQUEST['fecha_evento'];
$fecha_inicio      = date('Y-m-d', strtotime($f_inicio)); 
$color_evento      = $_REQUEST['color_evento'];

$UpdateProd = ("UPDATE eventoscalendar 
    SET evento ='$evento',
        fecha_evento ='$fecha_evento',
        color_evento ='$color_evento'
    WHERE id='".$idEvento."' ");
$result = mysqli_query($con, $UpdateProd);

header("Location:index.php?ea=1");
?>