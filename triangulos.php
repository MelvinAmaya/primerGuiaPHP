<!DOCTYPE html>
<html>
<head>
	<title>Determinar tipo de triángulo</title>
	<link rel="stylesheet" href="css/triangulo.css">
	<link rel="stylesheet" href="css/navbar.css">
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
	<div class="centrar">
	<h1>Determinar tipo de triángulo</h1>
	<form method="post">
		<input type="number" name="ladoA" placeholder="Lado A">
		<input type="number" name="ladoB" placeholder="Lado B">
		<input type="number" name="ladoC" placeholder="Lado C">
		<input  class="button" type="submit" name="submit" value="Calcular">
	</form>
	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$lado1 = $_POST['ladoA'];
			$lado2 = $_POST['ladoB'];
			$lado3 = $_POST['ladoC'];

		
			if ($lado1 == "" && $lado2 == "" && $lado3 == ""){
				echo "<div class='resultado'>Porfavor ingrese todos los lados.</div>";

			}else{
				if ($lado1 == $lado2 || $lado2 == $lado3 || $lado3 == $lado1) {
					if ($lado1 == $lado2 && $lado2 == $lado3) {
						echo "<div class='resultado'>El triángulo es equilátero</div>";
					} else {
						echo "<div class='resultado'>El triángulo es isósceles</div>";
					}
				} elseif ($lado1 != $lado2 && $lado2 != $lado3 && $lado3 != $lado1) {
					echo "<div class='resultado'>El triángulo es escaleno</div>";
				} else {
					echo "<div class='resultado'>El triángulo es isósceles</div>";
				}

			}

			
		}
	?>
    </div>

	
	
</body>
</html>