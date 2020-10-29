<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora MVC</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/components.css">
</head>

<body>
<header class="cap">
         <img src="../img/php-plain.svg" alt="" width="100">
    </header>
    <section class="escrits">
       <h3>Resultat</h3>

       <?php
foreach ($calculadora as $valor) {
    $valor->calcular();
    
}
?>
    </section>
    <div class="final">
        <a href="../index.php">Tornar</a>
    </div>
       
       <footer>
        <p>Albert Sans 2020</p>
    </footer>
</body>
</html>












