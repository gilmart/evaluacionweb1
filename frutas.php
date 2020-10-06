<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Frutas</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Ejercicios</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="calculadora.php">Calculadora</a>
                    </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="imc.php">IMC<span class="sr-only"></a></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="banco.php">Banco<span class="sr-only"></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="frutas.php">Frutas<span class="sr-only"></a></a>
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
            
          

                <form class="mt-3"   method="POST" action=frutas.php>   
                     <h4>FRUTAS</h4>
                   
                    <div class="row p-1" >
                           <div class="col col-6">
                           <input type="text" class="form-control" placeholder="FRUTA1" name="fruta[]" id="fruta">
                           </div>
                           <div class="col col-6">
                           <input type="text" class="form-control" placeholder="LINK1" name="link[]">
                          </div>
                    </div> 

                    <div class="row p-1" >
                             <div class="col col-6">
                           <input type="text" class="form-control" placeholder="FRUTA2" name="fruta[]" id="fruta">
                        </div>                           
                            <div class="col col-6">
                           <input type="text" class="form-control" placeholder="LINK2" name="link[]">
                        </div>
                    </div> 
                    <div class="row p-1" >
                        <div class="col col-6">
                           <input type="text" class="form-control" placeholder="FRUTA3" name="fruta[]" id="fruta">
                        </div>
                        <div class="col col-6">
                           <input type="text" class="form-control" placeholder="LINK3" name="link[]">
                        </div>
                    </div> 
                   
                    <div class="row p-1" >
                        <div class="col col-6">
                           <input type="text" class="form-control" placeholder="FRUTA4" name="fruta[]" id="fruta">
                        </div>
                        <div class="col col-6">
                           <input type="text" class="form-control" placeholder="LINK4" name="link[]">
                        </div>
                   
                    </div>
                    <div class="row p-1" >
                        <div class="col col-6">
                           <input type="text" class="form-control" placeholder="FRUTA5" name="fruta[]" id="fruta">
                        </div>
                        <div class="col col-6">
                           <input type="text" class="form-control" placeholder="LINK5" name="link[]">
                        </div>
                    </div> 
                     
                  
               

                    <button type="submit" class="btn btn-primary mt-3 btn-block" name="calcular">Calcular</button>        <br>           
                </form>


                <?php 
                       if(isset($_POST["calcular"])){
                                            
                        if ( !empty($_POST["fruta"]) && is_array($_POST["fruta"]) ) { 
                            echo "<ol>";
                            foreach ( $_POST["fruta"] as $fruta ) { 
                                    echo "<li>";
                                    echo $fruta; 
                                    echo "</li>"; 
                             }
                             echo "</ol>";
                       }
                       if ( !empty($_POST["link"]) && is_array($_POST["link"]) ) { 
                        echo "<ol>";
                        foreach ( $_POST["link"] as $link ) { 
                                echo "<li>";
                                echo $link; 
                                echo "</li>"; 
                         }
                         echo "</ol>"; 

                       }

                        }
                      
                        ?>
                    
                    
                
          

       
                       




   
                        
                   

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