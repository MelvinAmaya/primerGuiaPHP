<!DOCTYPE html>
<html>
<head>
    <title>Prueba tu suerte</title>
   <link rel="stylesheet" href="css/suerte.css">
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
    <h1>Prueba tu suerte</h1>
    <form method="POST">
        <input type="submit" value="Haz clic para probar suerte!">
        <?php
            session_start();

            if (!isset($_SESSION['counter'])) {
                $_SESSION['counter'] = 0;
                $_SESSION['last_num'] = null;
            }

            function obtener_elnumero() {
                return rand(1, 9);
            }

            function acierto($num) {
                return $num == 7;
            }

            function jugar() {
                $num = obtener_elnumero();
                echo "<div class = 'informacion'>Sacaste el número: $num</div><br>";
                
                if (acierto($num)) {
                    $_SESSION['counter']++;
                    echo "<div class = 'ganando'>¡Que suerte! Llevas {$_SESSION['counter']} aciertos </div><br>";
                    if($_SESSION['counter'] == 3 ){
                        echo "<div class = 'ganando'>Has aganado</div>";

                    }
                } else {
                    $_SESSION['counter'] = 0;
                    echo "<div class = 'perdiendo'>¡Lo siento se acabo tu suerte! Tu contador se ha reseteado.</div><br>";
                }
                
                $_SESSION['last_num'] = $num;
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                jugar();
            }

        ?>
    </form>
</body>
</html>