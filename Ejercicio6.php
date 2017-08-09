<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio 6</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  </head>
  <body>
    <div class="container">

      <h2>Multiplicar numero</h2>
      <h3></h3>
      <form method="post">
        <label>Ingrese un numero: &nbsp &nbsp</label>
        <input type="number" name="num1" value="">
        <br>
        <br>
        
        <input class="btn btn-target" type="submit" name="Enviar" value="Consultar">
        <hr>

      <?php

        $num1=$_POST['num1'];
        for($i=0; $i <= 10 ; $i++){
        echo "$num1 x $i = ".($num1*$i)."<br/>";

        }
       ?>
       <hr>
       <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
    </div>
    
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>

  </body>
</html>
