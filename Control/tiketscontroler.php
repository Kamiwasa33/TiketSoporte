<?php
    class tiketscontroler{

        public function __construct (){
            require_once "modelo/TiketsModel.php";
        }

        public function index(){
            //importar coneccion
            $tikets = new TiketsModel();
            $tikets->gettikets();
            //$data["titulo"]="Tikets";
            $data["tikets"]=$tikets->gettikets();
            require_once "Vistas/tikets.php";
        }

        public function nuevo(){
            $data["titulo"] = "Nuevo";
            require_once "Vistas/nuevotiket.php";
        }

        public function guardar(){
            $Titulo = $_POST ['Titulo'];
            $Nombre = $_POST ['Nombre'];
            $Mensaje = $_POST ['Mensaje'];
            $Telefono = $_POST ['Telefono'];
            $Mail = $_POST ['Mail'];
            $Estatus = 'NUEVO';

            $tikets = new TiketsModel();
            $tikets->nuevotiket($Titulo,$Nombre,$Mensaje,$Telefono,$Mail,$Estatus);

            $data["titulo"] = "Tikets";
            $this->index();
        }

        public function modificar($id){
            $tikets = new TiketsModel();
            $data["id"] = $id;
            $data["tiket"] = $tikets->tiket($id);
            $data["titulo"] = "Modificar";
            require_once "Vistas/modificar.php";
        }

        public function actualizar(){
            $id = $_POST ['id'];
            $Titulo = $_POST ['Titulo'];
            $Nombre = $_POST ['Nombre'];
            $Mensaje = $_POST ['Mensaje'];
            $Telefono = $_POST ['Telefono'];
            $Mail = $_POST ['Mail'];
            $Estatus = $_POST ['Estatus'];

            $tikets = new TiketsModel($id,$Titulo,$Nombre,$Mensaje,$Telefono,$Mail,$Estatus);
            $tikets->modificar($id,$Titulo,$Nombre,$Mensaje,$Telefono,$Mail,$Estatus);

            $data["titulo"] = "Modificar";
            $this->index();
        }
        public function eliminar($id){
            $tikets = new TiketsModel();
            $tikets->eliminar($id);
            $this->index();
        }
    }
?>