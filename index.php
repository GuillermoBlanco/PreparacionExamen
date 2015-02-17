<?php
require_once "./controlador.php";
session_start();
//date_default_timezone_set("Europe/Madrid");

$modelo= new controlador();

if (isset($_SESSION['representacion']) || isset($_GET['representacions'])){
    if (isset($_GET['representacions'])) {
        
        $espectacle=explode(",",$_GET['representacions']);
        $_SESSION['representacion']=$modelo->getRepresentacion($espectacle[0],$espectacle[1],$espectacle[2]);
        $_SESSION['espectacle']=$modelo->getEspectacle($espectacle[0]);
    }

    //Recoger asientos para poder comprar

}
elseif (!isset($_SESSION['espectacle']) && !isset($_GET['representacions'])) {
    showSelectEspectacles($modelo);
    if (!isset($_SESSION['representacion']) && isset($_GET['espectacle'])) {
        showSelectRepresentacions($modelo);

    }
}



function showSelectEspectacles($modelo){
    $espectacles;
        if ($espectacles=$modelo->getEspectacles()) {
            echo "<form method=get action='index.php'><select name = 'espectacle'>";
            foreach ($espectacles as $espectacle) {
                echo "<option value = '".$espectacle->getCodi()."'";
                if (isset($_GET['espectacle']) && $espectacle->getCodi()==$_GET['espectacle']) {
                    echo 'selected';
                }
                echo ">".$espectacle->getNom()."</option>";
            }
            echo "</select><button type='submit'>Buscar representaciones</button></form>";
        }
}

function showSelectRepresentacions($modelo){
    $representacions;
    if ($representacions=$modelo->getRepresentacions($_GET['espectacle'])) {
        echo "<form method=get action='index.php'><select name = 'representacions'>";
        foreach ($representacions as $representacio) {
            echo "<option value = '".$_GET['espectacle'].",".$representacio->getData().",".$representacio->getHora()."'";
            //echo ">".date("d \of F",  strtotime($representacio->getData()))." - ".strtotime($representacio->getHora()).$representacio->getHora()."</option>";
            echo ">".explode(" ",$representacio->getData())[0]." - ".explode(" ",$representacio->getHora())[1]."</option>";
        }
        echo "</select><button type='submit'>Elegir representacion</button></form>";
    }
}


