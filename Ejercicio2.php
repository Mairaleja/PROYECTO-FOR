<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ejercicio 2</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container">
      <h2>Algoritmo que muestre impares que van del primer numero al segundo</h2>

      <form method="post">
        <label>Ingrese un numero: &nbsp &nbsp</label>
        <input type="number" name="num1" value="">
        <br>
        <br>
        <label>Ingrese otro numero: &nbsp</label>
        <input type="number" name="num2" value="">
        <br>
        <br>
        <input class="btn btn-target" type="submit" name="Enviar" value="Consultar">
        <hr>
        <?php
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];

        for($num1=$num1; $num1 <= $num2 ; $num1++){
          if(($num1%2)==1) {
          echo "$num1 &nbsp";

         }

        }

         ?>
         <hr>
         <a class="btn btn-danger"href="index.php"><i class="fa fa-times fa-1x" aria-hidden="true"></i></a>
       </form>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
