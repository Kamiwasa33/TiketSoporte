<?php
    class conectar {
        public static function conection (){
            $conection = new mysqli($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASS'],$_ENV['DB_BD']);
                return $conection;
        }
    }
?>
