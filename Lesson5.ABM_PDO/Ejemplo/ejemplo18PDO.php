<!DOCTYPE html>
<html>
     <head>
        <title> Ejempos PHP</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

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
                                  class cd
                                    {<br>
                                    public static function BorrarPersonaPorNombre($nombre)
                                   {<br>

                                      $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); <br>
                                      $consulta =$objetoAccesoDato->RetornarConsulta("<br>
                                        delete <br>
                                        from personas        <br>
                                        WHERE nombre=:nombre"); <br>
                                        $consulta->bindValue(':nombre',$nombre, PDO::PARAM_INT);   <br>
                                        $consulta->execute();<br>
                                        return $consulta->rowCount();<br>

                                   }<br>
                                                                                                      
                                    }<br>
                                    //utilización del método estático<br>
                                   
                                   $cantidadDeAfectadas =Persona::BorrarPersonaPorNombre(nombre);
                                    print("filas afectadas :$cantidadDeAfectadas<br>");
                                  
                                 


                                    
                    </div>
             </div>
             <h3 >  Método de la clase Borrar por Persona::BorrarPorNombre </h3>

                                    <?php
                                    include_once ("clases/AccesoDatos.php");
                                    include_once ("clases/persona.php");

                                   $arraysDePersonas =Persona::TraerTodasLasPersonas();

                                  echo" <table class='table  '>
                                    <thead>
                                      <tr>
                                        <th>Borrar</th>
                                        <th>Legajo</th>
                                        <th>Nombre</th>
                                        <th>Edad</th>
                                      </tr>
                                    </thead>";

                                    foreach ($arraysDePersonas as $persona) {
                                    echo "<tr>
                                        <td> <a class='btn btn-danger' onClick=BorrarPorIdOrNombre  ($persona->nombre)>Borrar</a></td>
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



