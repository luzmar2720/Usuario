<?php
    class Registrar extends DB{
        public function InsertUser($nombres, $apellidos, $correo, $password, $descripcion){
            try{
                $stm=parent::conectar()->prepare("INSERT INTO usuarios(Nombres, Apellidos, Correo, Clave, Descripcion) VALUES('$nombres', '$apellidos','$correo', '$password','$descripcion')");
                //$stm->bindParam(1,$email,PDO::PARAM_STR);
                $stm->execute();
            }
            catch(Exception $e){
                die($e->getMessage());
            }
        }
    }
?>