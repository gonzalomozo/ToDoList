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
    <title>ToDoList</title>   
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700,900&display=swap" rel="stylesheet">
   
    <!--materialize-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	
       
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	   <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
	   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	

    <link rel="stylesheet" href="assets/css/estiloBienvenida.css">
    
  </head>
<body> 
    <!--<a href="php/cerrar_sesion.php"> cerrar sesion</a>-->
    
    
    <!--menu de navegador-->
   
    <ul id="dropdown1" class="dropdown-content">
        <div class="row"><div class="col">
        <li><a href="rompe.html">Promocion1</a></li>
    
        <li class="divider"></li>
        <li><a href="#!"></a></li></div><div class="col">	
        </div></div>
      </ul>
      <ul id="dropdown2" class="dropdown-content">
        <li><a href="rompe.html">Promoción1</a></li>
        <li><a href="#!"></a></li>
        <li class="divider"></li>
        <li><a href="#!"></a></li>
      </ul>
      <nav id=menu>
        <div class="nav-wrapper">
            <a href="index.html" class="brand-logo" id="pepa">ToDoList GZ<span>&#160;</span></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger btn-floating pulse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <!--<li><a href="index.html" id="pepa">Inicio</a></li>
            <li><a href="sass.html" id="pepa"><img src="I.png" id="ioi"></a></li>
            <li><a href="https://www.facebook.com/Munayki-Qosqo-963471254044223" ><img src="f.png" id="ioi"></a></li>-->
            <li><a href="php/cerrar_sesion.php" id="pepa">Cerrar sesion</a></li>
            <!-- Dropdown Trigger -->
           <!-- <li><a class="dropdown-trigger" href="#!" data-target="dropdown1" id="pepa">Inicia Sesion<i class="material-icons right">arrow_drop_down</i></a></li>
         --> </ul>
        </div>
        </nav>
        
        <ul class="sidenav" id="mobile-demo">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="sass.html"><img src="I.png" id="ioi"></a></li>
            <li><a href="https://www.facebook.com/Munayki-Qosqo-963471254044223"><img src="f.png" id="ioi"></a></li>
        <li><a href="./htmlProducto/molde.html">Productos</a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Promocionws<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
  
    
    <!--todo list-->
    <h1 class="title">Cosas que hacer</h1>
    <div class="all-tasks">
    <h2 class="task-list-title">Crea tu lista Usuario:</h2>
    <ul class="task-list" data-lists></ul>
    <form action="" data-new-list-form>

        <input type="text" class="new list" data-new-list-input  placeholder="Lista nueva" aria-label="new list name">
    <button class="btn create" aria-label="create new list">+</button>
    </form>
    </div>

    <div class="todo-list"  data-list-display-container>
      <div class="todo-header">
       <h2 class="list-title" data-list-title>Todo List</h2>   
       <p class="task-count" data-list-count> Tareas restantes</p>
      </div>  
      <div class="todo-body">
          <!--tarea 1-->
          <div class="tasks" data-tasks> </div>
           <div class="new-task-creator">
            <form action="" data-new-task-form>
                <input type="text" data-new-task-input class="new task" placeholder="Nuevo nombre de tarea" aria-label="new task name">
            <button class="btn create" aria-label="create new task">+</button>
            </form>
           </div>
           <div class="delete-stuff">
               <button class="btn delete" data-clear-complete-tasks-button>Borrar tareas completadas</button>
               <button class="btn delete" data-delete-list-button>Eliminar lista</button>
           </div>
          
      </div>

    </div>
    

    <template id="task-template">
      <div class="task">
        <input type="checkbox"> 
        <label >
            <spam class="custom-checkbox"></spam>                               
        </label>
        </div>
    </template>
    <!--script de materialize-->
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	


	
      <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
      
     
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  
    <script src="assets/js/materialize.js"> </script>
    <script src="assets/js/Init.js"> </script>
    <script defer src="assets/js/scriptTD.js"> </script>
</body>
</html>