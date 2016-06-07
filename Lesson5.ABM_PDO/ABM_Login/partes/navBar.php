<?php 
session_start();
if (isset($_SESSION["usuario"])) {
?>
<nav class="navbar-default navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/utnlogo.png" alt="index.html" style="width: 80%;">
            </a>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse">
                <ul class="nav navbar-nav col-md-offset-4 col-md-11">
                    <li>
                        <a class="nav" onclick="Mostrar('MostrarGrilla')" href="#">Productos</a>
                    </li>
                    <li>
                    <?php if ($_SESSION["usuario"]["usuario"] == "administrador"){ ?>
                         
                     <a onclick="Mostrar('MostrarUsuarios')" class="navAdmin" href="#">Usuarios</a>
                                <?php } ?>   
         
                    </li>
                    
                    <li class="col-md-offset-8">
                        <a onclick="Mostrar('MostrarPerfil')" href="#">Perfil</a>
                    </li>

                    <li>
                        <a onclick="deslogear()" href="#">Log Out</a>
                    </li>
                </ul>

            </div>
           
            <!-- /.navbar-collapse -->
        </div>
</nav>
 <?php 
 }
 else{
 ?>
 <?php 
header('location: login.html');
 }
  ?>