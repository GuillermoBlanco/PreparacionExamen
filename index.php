<?php
require_once "./controlador.php";
session_start();
//date_default_timezone_set("Europe/Madrid");

$modelo= new controlador();

include "Plantillas/cabecera.html";

showSelectEspectacles($modelo);

if (isset($_SESSION['espectacle']) || isset($_GET['espectacle'])) {
    if(isset($_GET['espectacle'])){
        $_SESSION['espectacle']=$modelo->getEspectacle($_GET['espectacle']);
    }

    showSelectRepresentacions($modelo);

}

if (isset($_SESSION['representacion']) || isset($_GET['representacion'])){
    if (isset($_GET['representacion'])) {
        
        $espectacle=explode(",",$_GET['representacion']);
        $_SESSION['representacion']=$modelo->getRepresentacion($espectacle[0],$espectacle[1],$espectacle[2]);
        $_SESSION['recinte']=$modelo->getRecinto($_SESSION['espectacle']->getCodiRecinte());
    }
    showInfoEspectacle();
   
    showZonas($modelo);

}

if(isset($_GET['zona']) || isset($_SESSION['zona'])){
    if(isset($_GET['zona'])){
        $_SESSION['zona']=$_GET['zona']; 
    }
    showAsientos($modelo);
}




function showSelectEspectacles($modelo){
    $espectacles;
        if ($espectacles=$modelo->getEspectacles()) {
            echo "<form method=get action='index.php'><select name = 'espectacle'>";
            foreach ($espectacles as $espectacle) {
                echo "<option value = '".$espectacle->getCodi()."'";
                if ( isset($_SESSION['espectacle']) && $espectacle->getCodi()==$_SESSION['espectacle']) {
                    echo 'selected';
                }
                elseif (isset($_GET['espectacle']) && $espectacle->getCodi()==$_GET['espectacle']) {
                    echo 'selected';
                }
                echo ">".$espectacle->getNom()."</option>";
            }
            echo "</select><button type='submit'>Buscar representaciones</button></form>";
        }
}

function showSelectRepresentacions($modelo){
    $representacions;
    if ($representacions=$modelo->getRepresentacions($_SESSION['espectacle']->getCodi())) {
        echo "<form method=get action='index.php'><select name = 'representacion'>";
        foreach ($representacions as $representacio) {
            echo "<option value = '".$_SESSION['espectacle']->getCodi().",".$representacio->getData().",".$representacio->getHora()."'";
                //Arreglar refresco
                //------------------
                // if ( isset($_SESSION['representacion']) && $representacio->getData()==$_SESSION['representacion']->getData()) {
                //     echo 'selected';
                // }
                // elseif (isset($_GET['representacion']) && $representacio->getCodi()==$_GET['representacion']) {
                //     echo 'selected';
                // }            
                echo ">".explode(" ",$representacio->getData())[0]." - ".explode(" ",$representacio->getHora())[1]."</option>";
        }
        echo "</select><button type='submit'>Elegir representacion</button></form>";
    }
}

function showInfoEspectacle(){
    echo '<p>Recinto: '.$_SESSION['recinte']->getNom().', '.$_SESSION['recinte']->getAdreA().'. '.$_SESSION['recinte']->getCiutat();
}

function showZonas($modelo){
    if($zonas=$modelo->getZonas($_SESSION['recinte']->getCodi())){
        echo "<form method=get action='index.php'><select name = 'zona'>";
        foreach ($zonas as $zona) {
            $ocupados=$modelo->countAsignados($_SESSION['representacion'],$_SESSION['recinte'],$zona->getZona());
            echo "<option value = '".$zona->getZona()."'";
            if (isset($_GET['zona']) && $zona->getZona()==$_GET['zona']) {
                echo 'selected';
            }
            echo ">".$zona->getZona()." - ".($zona->getCapacitat()- $ocupados)." asientos libres</option>";
        }
        echo "</select><button type='submit'>Elegir zona</button></form>";
    }
}

function showAsientos($modelo){
    if($asientos=$modelo->getAsientos($_SESSION['recinte']->getCodi(),$_SESSION['zona'])){
        $ocupados=$modelo->getAsignados($_SESSION['representacion'],$_SESSION['recinte'],$_SESSION['zona']);
        echo "<form method=get action='index.php'>";
        foreach ($asientos as $asiento) {
            if (in_array($asiento, $ocupados)) {
                echo "<span style='color:red'>X  Fila: ".$asiento->getFila()."- Asiento: ".$asiento->getNumero()."</span>";
            }
            else {
                echo '<input type="checkbox" name="asientos[]" value="'.$asiento->getFila().','.$asiento->getNumero().'">Fila: '.$asiento->getFila().'- Asiento: '.$asiento->getNumero().'';
            }
            echo '</br>';
        }
        echo '</br>';
        echo "<button type='submit'>Elegir Asientos</button></form>";
    }
}


