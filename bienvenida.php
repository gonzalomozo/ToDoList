<?php

session_start();
if(!isset($_SESSION['usuario'])){
    echo '
    <script>
    alert("Por favor debes iniciar sesión");
    window.location="index.php";
    </script>';
    //header("location: index.php");
    session_destroy(); 
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a su ToDoList</title>
</head>
<body>
    <h1>Bienvenido a su ToDoList querido usuario</h1>
    <a href="php/cerrar_sesion.php"> cerrar sesion</a>
    
</body>
</html>