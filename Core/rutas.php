<?php
    function cargarcontrolador($controlador){
        $nombrecontrolador = $controlador."controler";
        $archivocontrolador = 'Control/'.$controlador.'controler.php';

        if(!is_file($archivocontrolador)){
            $archivocontrolador='Control/'.CONTROLADOR_PRINCIPAL.'.php';
        }
        //echo $nombrecontrolador;   
        //echo $archivocontrolador;  
        require_once $archivocontrolador;
        $control = new $nombrecontrolador();
        return $control;
    }

    function cargaraccion($controler,$accion,$id=null){

        if(isset($accion) && method_exists($controler,$accion)){
            if($id==null){
                $controler->$accion();
            } else { $controler->$accion($id); }
        } else {
            $controler->ACCION_PRINCIPAL();
            }        
    }
?>