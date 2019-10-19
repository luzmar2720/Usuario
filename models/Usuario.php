<?php 

class Usuario extends DB{
            //consulta por correo    
        public function requestEmail($email){

             try{
                 $stm=parent::conectar()->prepare("SELECT * FROM usuarios WHERE Correo = ? ");
                 $stm->bindParam(1,$email,PDO::PARAM_STR);
                 $stm->execute();
                 return $stm->fetch(PDO::FETCH_OBJ);
             }catch(Exception $e) {
                 die($e->getMessage());
             }   
        }

}

?>
