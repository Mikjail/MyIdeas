<!DOCTYPE html>
<html>
     <head>
        <title> Ejempos PHP</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <script src="./js/funciones.js"></script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
      <div class="container">
            <div class="page-header">
                <h1>Ejemplos de PHP</h1>      
            </div>
            <div class="jumbotron">
                <h3 class="text-info">Método de instancia para Modificar.</h3>
                    <div class="well well-sm text-info">
                       
                                    include_once ("clases/AccesoDatos.php");
                                    include_once ("clases/persona.php");
                                 $arraysDePersonas =Persona::TraerTodasLaspersonas();
                                 <br> creo la tabla<br>

                                  foreach ($arraysDePersonas as $persona) {
                                    <br>
                                   //formo el contenido de las celdas<br>
                                    $persona->nombre;
                                  }
                                <br> cierro la tabla<br>
                                    <br>
                                 


                                    
                    </div>
             </div>
             <h3 >  Método de la clase Persona::BorrarPorID </h3>
                                    <?php
                                    include_once ("clases/AccesoDatos.php");
                                    include_once ("clases/persona.php");

                                   $arraysDePersonas =Persona::TraerTodasLasPersonas();

                                  echo" <table class='table  '>
                                    <thead>
                                      <tr>
                                        <th>Modificar</th>
                                        <th>borrar</th>
                                        <th>Legajo</th>
                                        <th>Nombre</th>
                                        <th>Edad</th>
                                      </tr>
                                    </thead>";



                                  foreach ($arraysDePersonas as $persona) {
                                    echo "<tr>
                                        <td> <a class='btn btn-warning' onClick=Modificar($persona->id) >Modificar</a></td>
                                        <td> <a class='btn btn-danger' onClick=BorrarPorIdOrNombre($persona->id)>Borrar</a></td>
                                        <td>$persona->legajo</td>
                                        <td>$persona->nombre</td>
                                        <td>$persona->edad</td>
                                      </tr>";
                                  }
                                  echo" </table>"; 
                                    ?>
                            <a class="btn btn-info" href="indexPDO.html">Menu principal</a>


                  </div>

    </body>
</html>



