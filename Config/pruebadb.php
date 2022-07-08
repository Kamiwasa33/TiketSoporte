<?php

//$db = mysqli_connect("localhost","root","root","tiketsoporte");

//if(!$db){ echo "error en la coneccion";
//} else {
//    echo "conceccion valida";
//}


//class conectar {
    //public static 
    function conection (){
        $conection = new mysqli("localhost","root","root","tiketsoporte");


        if(!$conection){ echo " error en la coneccion2";
        } else {
            echo " conceccion valida2";
        }
            return ;



    }
//}

conection();

?>