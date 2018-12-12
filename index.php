<!doctype html>
<html lang="en">
  <head>
    <title>Examen IAW december 2018</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
      <body>
        <h1 style="text-align:center;">   Examen IAW December 2018 </h1> <br>
        <form style="text-align:center;" method="GET" action="index.php" >
            <label for="busqueda">Escriba el DNI a buscar :</label>
            <input type="text" placeholder="Introduzca DNI" name="busqueda">
    
            <div class="form-check"></div>
            <button type="submit" class="btn btn-primary">ENVIAR</button>

        </form>
        <br>
        <div class="container">           
<?php
    include_once 'functions.php';
    $rest = students();
    foreach ($rest as $key=> $value) {                          // bucle del array para poder ir sacando todos los valores de las array
?>
                <div class="card">                              <!-- html para enseñar los valores del array -->
                    <div class="card-body">
                       
                        <img id='photo' src='<?=$value["photo"] ?>'/> 
                        <h2> NAME <?= $value["name"] ?></h2>
                        <p>DNI= <?= $value["DNI"] ?></p>
                        <p>E-Mail =<?= $value["E-mail"] ?></p>
                        <p>AGE= <?= $value["age"]?></p>
                        <p>Cursos =<?= $value["course"]?></p>
 <?php
            if ($value["age"]>=18) {                            // comprobacion de si es mayor o menor de edad
                echo "Es mayor de edad";                        
            }
            else {echo "Es un bebe";
            }       
            ?>
                    </div>
                </div>
<?php    }                                                      // cierre del foreach
?>     
        </div>
     </body>
<footer>                                                        <!--pie de pagina -->
<p> @copy By Mateo Font </p>
</footer>   
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>