<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>Calculadora MVC</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/css/components.css">
</head>
<body>
<header class="cap">
         <img src="/img/php-plain.svg" alt="" width="100">
    </header>
    <nav class="navbar">
        <a href="../index.html"><img src="/img/home.svg" alt="" width="50"></a>
        
    </nav>
    <section class="principal">
        <h3>Calculadora MVC</h3>
    <form action="Controller/CalculadoraController.php" method="post">
    <div class="general">
 <div class="formulari">
    <input type="text" name="numero1" id="" placeholder="Escriu un número">
    <select name="operador" id="">
    <option value="">Escull una operació</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    </select>
    <input type="text" name="numero2" id="" placeholder="Escriu un número">
</div>
<div class="boto">
            <button type="submit">Calcula</button>
        </div>
        </div>
        </form>
    </section>
    <footer>
        <p>Albert Sans 2020</p>
    </footer>
</body>
</html>