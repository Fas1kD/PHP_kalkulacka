<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KalkulackaPHP</title>
</head>
<body>
    <h1>Tohle je kalukacla v php</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name ="cislo1" placeholder="Zde zadejte první číslo">




    <?php
    $txt = "<p style=\"color: blue;\">  Jsme samozvaní \"Vikingove\" ze severu </p>";
    echo "<h9> AHOJ </h9> <br> $txt! ";
    var_dump($txt)
    ?>
</body>
</html>
