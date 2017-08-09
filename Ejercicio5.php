<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio 5</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  </head>
  <body>
    <div class="container">

      <h2>Digitar un numero y que salga en asterisco</h2>
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

        for($i=1; $i <= $num1 ; $i++){
        echo " * &nbsp";
        }
       ?>

       <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
    </div>
    
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>

  </body>
</html>
