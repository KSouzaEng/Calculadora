<?php

session_start();

if (!isset($_SESSION['calc'])) {
    $_SESSION['calc'] = array();
}

if(isset ($_POST['numero1'])):

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];



if(isset ($_POST["somar"])):
    echo "Somando....";
    $resultado = $numero1 + $numero2;
    //var_dump( $resultado)
   
    header("Location: index.php?cal=$resultado");

endif;
if (isset ($_POST["sub"])):
    $resultado = $numero1 - $numero2;
    //var_dump( $resultado);
    header("Location: index.php?cal=$resultado");
endif;

if (isset ($_POST["mult"])):
    $resultado = $numero1 * $numero2;
    //var_dump( $resultado);
    header("Location: index.php?cal=$resultado");
endif;

if (isset ($_POST["div"])):
    $resultado = $numero1 / $numero2;
    //var_dump( $resultado);
    header("Location: index.php?cal=$resultado");
endif;
endif;