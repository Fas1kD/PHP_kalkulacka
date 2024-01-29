<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KalkulackaPHP</title>
</head>
<body>
    <!-- Nadpis -->

    <h1>PHP KALKULAČKA</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <!--PHP? FORMULÁŘ-->

         <!-- Input pro první číslo -->

        <input type="text" name ="cislo1" placeholder="Zde zadejte první číslo">

        <!-- Operace - výběr operace (+,-,/,*) -->

        <select name ="operace">      <!-- "select" - vytvoření výběrového řádku, "option value" - výber -->
            <option value = "+">+</option>
            <option value = "-">-</option>
            <option value = "*">*</option>
            <option value = "/">/</option>
            <option value = "**">2</option>     <!-- na druhou -->
        </select>

        <!-- Input pro druhé číslo -->

        <input type = "text" name = "cislo2" placeholder = "Zde zadejte druhé číslo">

        <!-- Tlačítko pro počítání -->

        <input type = "submit" name ="submit" value ="Spočítej">
    </form>     <!--Konec Formuláře-->









    <?php
    $txt = "<p style=\"color: blue;\">  Jsme samozvaní \"Vikingove\" ze severu </p>";
    echo "<h9> AHOJ </h9> <br> $txt! ";
    var_dump($txt)
    ?>
</body>
</html>

