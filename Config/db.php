<?php
    class conectar {
        public static function conection (){
            $conection = new mysqli("localhost","root","","");
                return $conection;
        }
    }

?>
