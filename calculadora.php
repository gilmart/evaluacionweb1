<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Calculadora</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="calculadora.php">Ejercicios</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="calculadora.php">Calculadora</a>
                    </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="imc.php">IMC<span class="sr-only">(current)</span></a></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="banco.php">Banco<span class="sr-only">(current)</span></a></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="frutas.php">Frutas<span class="sr-only">(current)</span></a></a>
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
            
                <form class="mt-3" action="calculadora.php" method="POST">   
                     <h4>Calculadora</h4>
                   
                    <div class="row" >
                        <div class="col">
                           <input type="text" class="form-control" placeholder="Numero1" name="n1">
                        </div>

                        <div class="row-2" >
                           <select class="form-control" name="signo">
                                <option>operacion</option>
                                <option value="0">+</option>
                                <option value="1">-</option>
                                <option value="2">*</option>
                                <option value="3">/</option>
                           </select>
                        </div>   

                        <div class="col">
                           <input type="text" class="form-control" placeholder="Numero2" name="n2">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3 btn-block" name="calcular">Calcular</button>      <br>              
                </form>

                        <?php

                           if(isset($_POST["calcular"])): ?>
                           
                           <h4 class="text-success text-center">    
                           <?php    
                            $n1=$_POST["n1"]; 
                            $n2=$_POST["n2"];
                            $signo=$_POST["signo"];
                            

                          switch($signo)
                          {
                            case "0": $total = $_POST["n1"] + $_POST["n2"];break;
                    
                            case "1":  $total = $_POST["n1"] - $_POST["n2"];break;

                            case "2":  $total = $_POST["n1"] * $_POST["n2"];break;

                            case "3":  $total = $_POST["n1"] / $_POST["n2"];break;
                            default: "no" ;
                          }
                          
                          echo("El total de la operación es de: " .$total);
                        
                        ?>
                         </h4>

                        <?php endif?>
                        


                     




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