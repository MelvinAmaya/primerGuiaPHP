<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Document</title>
</head>
<body >

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
        <h1 class="title">Heladería</h1>
        <br>

        <div class="bloqueImput">
            <form action="" method = "POST">

            <label for="">Conos: $1.50</label>
            <br>
            <input type="number" name="cantidadConos">
            <br>
            <label for="">Conos dobles: $1.75 </label>
            <br>
            <input type="number" name="cantidadConosDobles">
            <br>
            <label for="">Paletas: $0.25 </label>
            <br>
            <input type="number" name="cantidadPaletas">
            <br>
            <input class="button" type="submit" name = "submit" value = "Realizar Pedido">
            <br>


            </form>
            
            <?php
                if (isset($_POST['submit'])) {
                    $conosCant = intval($_POST["cantidadConos"]);
                    $precioCono = 1.50;
                    $doblesCant = intval($_POST["cantidadConosDobles"]);
                    $precioDoble = 1.75;
                    $PaletasCant = intval($_POST["cantidadPaletas"]);
                    $precioPaletas = 0.25;
                    
                    $totalconos = $precioCono * $conosCant;
                    $totaldobles = $precioDoble * $doblesCant;
                    $totalpaletas = $precioPaletas * $PaletasCant;
                    
                    $totalFinal = $totalconos + $totaldobles + $totalpaletas;
                    
                    echo "Factura.";
                    echo "<br>";
                    echo "$1.50 Cantidad de Conos: ". $_POST["cantidadConos"]." total = ".$totalconos;
                    echo "<br>";
                    echo "$1.75 Cantidad de Conos Dobles: ". $_POST["cantidadConosDobles"]." total = ".$totaldobles;
                    echo "<br>";
                    echo "$0.25 Cantidad de Paletas: ". $_POST["cantidadPaletas"]." total = ".$totalpaletas;
                    echo "<br>";
                    echo "total: ". $totalFinal;
                    echo "<br>";
                    
                    
                    if($totalFinal>=10){
                    
                        echo "Tienes un helado gratis";
                    
                    }
                }
            ?>
                    
            
        </div>
        
    </div>
   





    
</body>
</html>