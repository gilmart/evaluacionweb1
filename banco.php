<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANCO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="banco.php">Ejercicios</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="calculadora.php">Calculadora</a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="imc.php">IMC</a>
      </li>
      <li class="nav-item active"><a class="nav-link active" href="banco.php">Banco</a>
      </li>    
      <li class="nav-item active"><a class="nav-link active" href="frutas.php">Frutas</a>
      </li>    
    

      
    </form>
  </div>
</nav>

    </header>
    




    <main> 
     <div class="container-fluid">
   
     <div class="row justify-content-center">
          <div class="col-12">
        
          <form class="form class=mt-3" action="banco.php" method="POST">
         
          <h4> BANCO</h4>
                  
             <div class="row p-1">
            
                  <div class="col col-3">
                   <label for="nombre"> Trabajador 1</label>
                   <input class="form-control" type="text" name="trabajador[]" id="nombre" >
                  </div>
                  <div class="col col-3"> 
                   <label for="apellidos">Telefono</label>
                  <input class="form-control " type="text" name="telefono[]" id="telefono" >
                  </div>
            
                   <div class="col col-3"> 
                   <label for="apellidos">Direccion</label>
                  <input class="form-control" type="text" name="direccion[]" id="direccion" >
                   </div>
            
                  <div class="col col-3"> 
                   <label for="apellidos">Salario</label>
                  <input class="form-control" type="text" name="salario[]" id="salario" >
                  </div>
            </div>
            <div class="row p-1">
            
            <div class="col col-3">
             <label for="nombre"> Trabajador 2</label>
             <input class="form-control " type="text" name="trabajador[]" id="nombre" >
            </div>
            <div class="col col-3"> 
             <label for="apellidos">Telefono</label>
            <input class="form-control" type="text" name="telefono[]" id="telefono" >
            </div>
      
             <div class="col col-3"> 
             <label for="apellidos">Direccion</label>
            <input class="form-control" type="text" name="direccion[]" id="direccion" >
             </div>
      
            <div class="col col-3"> 
             <label for="apellidos">Salario</label>
            <input class="form-control" type="text" name="salario[]" id="salario" >
            </div>
      </div>

      <div class="row p-1">
            
            <div class="col col-3">
             <label for="nombre"> Trabajador 3</label>
             <input class="form-control " type="text" name="trabajador[]" id="nombre" >
            </div>
            <div class="col col-3"> 
             <label for="apellidos">Telefono</label>
            <input class="form-control" type="text" name="telefono[]" id="telefono" >
            </div>
      
             <div class="col col-3"> 
             <label for="apellidos">Direccion</label>
            <input class="form-control" type="text" name="direccion[]" id="direccion" >
             </div>
      
            <div class="col col-3"> 
             <label for="apellidos">Salario</label>
            <input class="form-control" type="text" name="salario[]" id="salario" >
            </div>
      </div>

      <div class="row p-1">
            
            <div class="col col-3">
             <label for="nombre"> Trabajador 4</label>
             <input class="form-control " type="text" name="trabajador[]" id="nombre" >
            </div>
            <div class="col col-3"> 
             <label for="apellidos">Telefono</label>
            <input class="form-control" type="text" name="telefono[]" id="telefono" >
            </div>
      
             <div class="col col-3"> 
             <label for="apellidos">Direccion</label>
            <input class="form-control" type="text" name="direccion[]" id="direccion" >
             </div>
      
            <div class="col col-3"> 
             <label for="apellidos">Salario</label>
            <input class="form-control" type="text" name="salario[]" id="salario" >
            </div>
      </div>

      <div class="row p-1">
            
            <div class="col col-3">
             <label for="nombre"> Trabajador 5</label>
             <input class="form-control" type="text" name="trabajador[]" id="nombre" >
            </div>
            <div class="col col-3"> 
             <label for="apellidos">Telefono</label>
            <input class="form-control" type="text" name="telefono[]" id="telefono" >
            </div>
      
             <div class="col col-3"> 
             <label for="apellidos">Direccion</label>
            <input class="form-control" type="text" name="direccion[]" id="direccion" >
             </div>
      
            <div class="col col-3"> 
             <label for="apellidos">Salario</label>
            <input class="form-control" type="text" name="salario[]" id="salario" >
            </div>
      </div>

                        <button type="submit" class="btn btn-primary mt-3 btn-block" name="botonCalcular">Calcular</button>
                        <br>
                  </form>
        
            <?php 
               if(isset($_POST["botonCalcular"]))
               {
                   if ( !empty($_POST["trabajador"]) && is_array($_POST["trabajador"]) ) { 
                    echo "<ol>";
                    foreach ( $_POST["trabajador"] as $trabajador ) { 
                            echo "<li>";
                            echo $trabajador; 
                            echo "</li>"; 
                     }
                     echo "</ol>";
               }
               /////
               if ( !empty($_POST["telefono"]) && is_array($_POST["telefono"]) ) { 
                echo "<ol>";
                foreach ( $_POST["telefono"] as $telefono ) { 
                        echo "<li>";
                        echo $telefono; 
                        echo "</li>"; 
                 }
                 echo "</ol>"; 
                }
                 ///
                 if ( !empty($_POST["direccion"]) && is_array($_POST["direccion"]) ) { 
                  echo "<ol>";
                  foreach ( $_POST["direccion"] as $direccion ) { 
                          echo "<li>";
                          echo $direccion; 
                          echo "</li>"; 
                   }
                   echo "</ol>";
             }
             ///
             if ( !empty($_POST["salario"]) && is_array($_POST["salario"]) ) { 
              echo "<ol>";
              foreach ( $_POST["salario"] as $salario ) { 
                      echo "<li>";
                      echo $salario; 
                      echo "</li>"; 
               }
               echo "</ol>"; 

              }
               foreach ( $_POST["salario"] as $salario ) 
                    { 
                    echo "<li>";
                    echo(array_sum($_POST["salario"])); 

                    echo "</li>"; 
                    }
                    echo "</ul>";
          
            $sucursalB=40000000;
            $sucursalC=32000000;

            $sumatoriasalario=array_sum($_POST["salario"]);
            
            if ($sumatoriasalario > $sucursalB && $sumatoriasalario > $sucursalC)
            {echo("La sucursal A cuenta con una sumatoria de " .$sumatoriasalario);}
            else if ($sucursalB > $sumatoriasalario && $sucursalB > $sucursalC){
            echo("La sucursal B cuenta con la mayor sumatoria y es de " .$sucursalB);}
            else{ echo("La sucursal C cuenta con la mayor sumatoria y es de " .$sucursalC); }

            }
            
            ?>

              </div> 
          </div> 
          </div>
          </div>



    </main>
    
    <footer>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
