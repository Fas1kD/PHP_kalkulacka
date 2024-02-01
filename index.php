<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KalkulackaPHP</title>
</head>
<body>
    
    <!-- Nadpis -->

    <h1>PHP KALKULAČKA</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <!--PHP? FORMULÁŘ (CHAT BOT)-->

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


    <!-- PHP funkce-->

    <?php
    function spocitej($cislo1, $cislo2, $operace){

        //Operace v PHP + - * / ** (nadruhou)

        //Vyhází ze zvoleni operaca ("case" = "if")
        switch ($operace) { 

            //Operace plus
            case "+":
                return $cislo1 + $cislo2;
                
            //Operace minus
            case "-":
                return $cislo1 - $cislo2;

            }

    }



    // Kontola inputu přepis (CHAT GPT)
    if(isset($_POST['submit'])) {
        $cislo1 = $_POST['cislo1'];
        $cislo2 = $_POST['cislo2'];
        $operace = $_POST['operace'];

        // Kontrola inputu a výpočet
        if(is_numeric($cislo1) && is_numeric($cislo2)) {

            // Počítání kalkulačky
            $result = spocitej($cislo1, $cislo2, $operace);
            echo "<p>Velký počítání: $cislo1 $operace $cislo2 = $result</p> <br> <p style=\"color: red;\">Výsledek: $result</p>"; //Výsledek (output)
        }
    }

    ?>








    <?php
    $txt = "<p style=\"color: blue;\">  Jsme samozvaní \"Vikingove\" ze severu </p>";
    echo "<h9> AHOJ </h9> <br> $txt! ";
    var_dump($txt)
    ?>
</body>
</html>
