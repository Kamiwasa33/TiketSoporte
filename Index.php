<?php
    require_once "vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->safeLoad();
    require_once "Config/db.php";
    require_once "Core/rutas.php";
    require_once "Config/config.php";
    require_once "Control/tiketscontroler.php";

    //llamar controlador fijo
    //$control = new tiketscontroler();
    //$control->nuevotiket();

    if (isset($_GET['c'])){
        $controlador = cargarcontrolador($_GET['c']);
        if (isset($_GET['a'])){
            if (isset($_GET['id'])){
                cargaraccion($controlador,$_GET['a'],$_GET['id']);
            } else {cargaraccion($controlador,$_GET['a'],null);}
        } else {
            cargaraccion($controlador,ACCION_PRINCIPAL);
        }
    } else { 
        $controlador = cargarcontrolador(CONTROLADOR_PRINCIPAL);
        $acciontemp = ACCION_PRINCIPAL;
        $controlador->$acciontemp();
    }
?>
