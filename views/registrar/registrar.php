<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/libs/bootstrap-4/css/bootstrap.css">
    <link rel="stylesheet" href="assets/all/style.css">
    <title>Registro de Usuario</title>

</head>

<body background="assets/all/img/Fondos45.jpg">
º

    <!-- (c= clase) y (m =metodo o funcion) -->
    <form action="?c=Registrar&m=register" method="post">

        <div class="container" background="assets/all/img/Fondos45.jpg">

            <h1 class="inicio">Registro</h1>
            <br>
            <label for="nombres"><b>Nombres</b></label>
            <br>
            <input class="form-control" type="name" name="nombres"  id="nombres" placeholder="nombre" required />
            <br>

            <label for="apellidos"><b>Apellidos</b></label> <br>
            <input class="form-control" type="apellidos" name="apellidos" id="apellidos" placeholder="apellidos" required />
            <br>

            <label for="email"><b>Correo</b></label>
            <br>
            <input class="form-control" type="email" name="email"  id="email" placeholder="email" required />
            <br>

            <label for="password"><b>Contraseña</b></label>
            <br>
            <input class="form-control" type="password" name="password" id="password" placeholder="Contraseña" required />
            <br>

            <label for="descripcion"><b>Descripción</b></label>
            <br>
            <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" ></textarea>
     
            <button   class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>


        </div>
    </form>
</body>

</html>