
<!DOCTYPE html>
<html>
<head>
    <title>Ingresar números</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/array.css">
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
    
    
    <form method="POST">
    <h1>Ingrese cinco números diferentes:</h1>
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" required><br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" required><br>
        <label for="numero3">Número 3:</label>
        <input type="number" name="numero3" required><br>
        <label for="numero4">Número 4:</label>
        <input type="number" name="numero4" required><br>
        <label for="numero5">Número 5:</label>
        <input type="number" name="numero5" required><br>
        <input type="submit" value="Enviar">
        
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $numeros = array($_POST['numero1'], $_POST['numero2'], $_POST['numero3'], $_POST['numero4'], $_POST['numero5']);
                echo "<h2>Los números que ingresaste son:</h2>";
                echo "<ul class = 'horizontal-list'><br>";
                foreach ($numeros as $numero) {
                    echo "<li>$numero</li>";
                }
                echo "</ul><br><br>";
            }
        ?>
    </form>
</body>
</html>
