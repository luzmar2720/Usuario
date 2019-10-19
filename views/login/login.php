<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/libs/bootstrap-4/css/bootstrap.css">
    <link rel="stylesheet" href="assets/all/style.css">
    <title>Inicio de sesion</title>
</head>
<body background="assets/all/img/Fondos45.jpg">


<!-- (c= clase) y (m =metodo o funcion) -->
<form action="?c=Login&m=auth" method="post" >

  <div class="container hig" background="assets/all/img/Fondos45.jpg">

          <h1 class="inicio">LOGIN</h1>
            <br>
                <label for="uname"><b>Correo</b></label>
                  <br>
                <input class="form-control" type="email" name="email" placeholder="email" required>
                  <br>
                  
                <label for="psw"><b>Contraseña</b></label> <br>
                <input class="form-control" type="password"  name="password" placeholder="Contraseña"  required>
                  <br>              
                <button class="btn btn-primary btn-lg btn-block">Login</button>
                        
                  
             
              <div class="row">
                <div clas="col-md-24">
                  <div class="text-13 action-links">
                    <div class="form-group">
                      <a class="lado" href="#">¿Olvidaste Tu Password?</a> 
                      <hr>
                    </div>
                  </div>
                </div>
              </div>               
                   <b><a class="liy" href="?c=Registrar&m=registro">Crear Cuenta</a></b>
          </div> 
        </form>
</body>
</html>