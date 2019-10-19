<?php
class LoginController extends Login{
        private $usuario;        
        public function __construct()
    {
        
        try{
           $this->usuario = new Usuario();
        }catch(Exception $e){

        }
    }    
    //$usuario= $this->usuario->requestEmail($_POST['email']); 
        
        
        public function login(){
            //formulario para iniciar sesion
        require_once('views/login/login.php');
    }
        public function register(){
            //formulario para registrar un usuario
    }
            //funcion encargada de generar la autenticacion y respectiva redireccion
          

        public function auth(){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $usuario= $this->usuario->requestEmail($_POST['email']);

            if($email == $usuario->Correo && $password == $usuario->Clave){
                echo "si es igual <br>";
                echo $usuario->Nombres.'<br>';
                echo $usuario->Apellidos.'<br>';
                echo $usuario->Correo.'<br>';
                echo $usuario->Clave.'<br>';
                echo $usuario->Descripcion.'<br>';
            }else{
                echo "error no es igual";
            }
        }
    
}

        

?>