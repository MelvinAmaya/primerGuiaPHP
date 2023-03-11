<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Document</title>
</head>
<body>
<header class="header">
        <div class="logo">
            <img src="img/Mountain.png" alt="Logo de la marca">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="arrays.php">Arrays</a></li>
                <li><a href="triangulos.php">triangulos</a></li>
                <li><a href="suerte.php">Suerte</a></li>
                <li><a href="heladeriaBase.php">Helados</a></li>
                <li><a href="operacionesMatematicas.php">Calculadora</a></li>
                
           </ul>            
        </nav>
        <a class="btn" href="index.php"><button>Home</button></a>
    </header>
    <br><br><br>

<form method="POST" action="">
<h1>Calculadora PHP</h1>
  <label for="numero1">Ingrese el primer número:</label>
  <input type="number" id="numero1" name="numero1">
  <br>
  <label for="numero2">Ingrese el segundo número:</label>
  <input type="number" id="numero2" name="numero2">
  <br>
  <label for="operacion">Seleccione la operación a realizar:</label>
  <select id="operacion" name="operacion">
    <option value="suma">Suma</option>
    <option value="resta">Resta</option>
    <option value="multiplicacion">Multiplicación</option>
    <option value="division">División</option>
  </select>
  <br>
  <input  class="button" type="submit" name="submit" value="Calcular">

<?php
if (isset($_POST['submit'])) {
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];
  $operacion = $_POST['operacion'];

  if($numero1 == "" || $numero2 == ""){
    echo "<div class='resultado'>Ingrese los numeros a operar.</div>";

  }
  else
  {
    switch ($operacion) {
      case 'suma':
        $resultado = $numero1 + $numero2;
        echo "<div class='resultado'>El resultado de la suma es: " . $resultado . "</div>";
        break;
      case 'resta':
        $resultado = $numero1 - $numero2;
        echo "<div class='resultado'>El resultado de la resta es: " . $resultado . "</div>";
        break;
      case 'multiplicacion':
        $resultado = $numero1 * $numero2;
        echo "<div class='resultado'>El resultado de la multiplicación es: " . $resultado . "</div>";
        break;
      case 'division':
        if ($numero2 != 0) {
          $resultado = $numero1 / $numero2;
          echo "<div class='resultado'>El resultado de la división es: " . $resultado . "</div>";
        } else {
          echo "<div class='resultado'>No es posible dividir entre cero</div>";
        }
        break;
      default:
        echo "<div class='resultado'>Operación no válida</div>";
        break;
    }

  }
  
  
}
?>
</form>


    
</body>
</html>