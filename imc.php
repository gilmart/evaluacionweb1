<?php 
    $imc=0;
    $resultado = "";
    $color=""; 
    
    if (isset($_POST["peso"]) && isset($_POST["altura"]) && is_numeric($_POST["peso"]) && is_numeric($_POST["altura"]))
     {
     $peso=$_POST["peso"];
      $altura=$_POST["altura"];

      $imc= $peso/($altura*$altura);
      $imc = round ($imc,2);
    
      if ($imc<18.5)
      {
          $resultado = "Peso inferior al normal";
          $color="orange";
      }
      if($imc > 18.5 && $imc <= 24.9)
      {
        $resultado = "Peso Normal";
        $color="green";
      }
       if($imc > 25 && $imc <= 26.9)
      {
        $resultado = "Sobrepeso G1";
        $color="yellow";
      }

       if($imc > 27 && $imc <= 29.9)
      {
        $resultado = "Sobrepeso G2";
        $color="orange";
      }
       if($imc > 30 && $imc <= 34.9)
      {
        $resultado = "Obesidad1";
        $color="red";
          
      }
       if($imc > 35 && $imc <= 39.9)
      {
        $resultado = "Obesidad2";
        $color="red"; 
      }
       if($imc > 40 && $imc <= 49.9)
      {
        $resultado = "Obesidad3";
        $color="red";
      }
     if($imc > 50)
      {
        $resultado = "Obesidad4";
        $color="red"; 
      }

      }
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>IMC</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="imc.php">Ejercicios</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    
                     <li class="nav-item active">
                        <a class="nav-link" href="calculadora.php">Calculadora</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="imc.php">IMC</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="banco.php">Banco</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="frutas.php">Frutas</a>
                    </li>

                   
                </ul>
    
    </form>
  </div>
</nav>
    </header>
    
    <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-8">
            
                <form class="mt-3" action="imc.php" method="POST">   
                     <h4>IMC</h4>
                   
                    <div class="row" >
                        <div class="col">
                           <input type="text" step=".01" class="form-control" placeholder="Tu peso en Kilogramos" required name="peso">
                        </div>


                        <div class="col">
                           <input type="text" class="form-control" step=".01"placeholder="Ingresa tu altura en metros" required name="altura">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3 btn-block" name="calcular">Calcular</button>                   

                </form><br>

                <?php if (isset($imc)) { ?>
                 <?php echo "Tu I.M.C es de -> " .$imc; ?>
                  <br>    
                <div style="color:<?php echo $color;?>">Resultado: <?php echo $resultado; ?></div>   
              <?php } ?>
            
           
                     </div>    
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