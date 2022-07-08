<?php 
    class TiketsModel {
        private $db;
        private $tikets;

        public function __construct(){
            $this->db = conectar::conection();
            $this->tikets = array();
        }

        public function gettikets(){
            $sql = "select id,Titulo,Nombre,Mensaje,Telefono,Mail,Estatus from tbtiket;";
            $resultado = $this->db->query($sql);
/*          //CURIOSAMENTE ESTAS LINEAS DE CODIGO NO SON NESESARIAS PARA MOSTRAR EL RESULTADO
                while($row = $resultado->fetch_assoc()){
                $this->tikets[]=$row;
            } */
            //print_r($resultado);
            //echo $sql;
            return $resultado;
        }

        public function nuevotiket($titulo,$nombre,$mensaje,$telefono,$mail,$estatus){
            $resultado = $this->db->query("insert into tbtiket (Titulo,Nombre,Mensaje,Telefono,Mail,Estatus) 
            values('$titulo','$nombre','$mensaje',$telefono,'$mail','$estatus');");
        }

        public function modificar($id,$titulo,$nombre,$mensaje,$telefono,$mail,$estatus){
            $resultado = $this->db->query("
                UPDATE tbtiket SET 
                Titulo='$titulo',Nombre='$nombre',Mensaje='$mensaje',Telefono='$telefono',Mail='$mail',Estatus='$estatus'
                WHERE id='$id';");
        }

        public function eliminar($id){
            $resultado = $this->db->query("DELETE FROM tbtiket WHERE id='$id';");
        }

        public function tiket($id){
            $resultado = $this->db->query("
                select id,Titulo,Nombre,Mensaje,Telefono,Mail,Estatus 
                from tbtiket 
                where id='$id' LIMIT 1;");
            $row = $resultado->fetch_assoc();
            return $row;
        }
    }
?>