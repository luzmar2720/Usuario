<?php 

        class RegistrarController extends Registrar{

            public function registro(){
                require_once('views/registrar/registrar.php');
            }
            public function register(){       
                $nombres = $_POST['nombres'];
                $apellidos =$_POST['apellidos'];
                $correo = $_POST['email'];
                $password = $_POST['password'];
                $descripcion = $_POST['descripcion']; 
                parent::InsertUser($nombres, $apellidos, $correo, $password, $descripcion);
                print("Insertado");
            
        
            }  
}

?>