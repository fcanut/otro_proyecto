<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES");

include('config.php');
                        
$idEvento         = $_POST['idEvento'];
$start            = $_REQUEST['start'];
$fecha_evento     = date('Y-m-d', strtotime($start)); 


$UpdateProd = ("UPDATE eventoscalendar 
    SET 
        fecha_evento ='$fecha_evento',

    WHERE id='".$idEvento."' ");
$result = mysqli_query($con, $UpdateProd);

?>