<?php

$paragrafo =  $_GET ['paragrafo'];
$parola = $_GET['parola'];
//echo $paragrafo .' ' . $parola;
$testoCensurato = str_replace($parola, '***', $paragrafo);
//echo $testoCensurato;
$lunghezzaParagrafo = strlen($paragrafo);
$lunghezzaParagrafoCensurato = strlen($testoCensurato)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing</title>
</head>
<body>
    
    <p>il testo inserito da te: "<?php echo $paragrafo ?>".</p>
    <p>la lunghezza di questo testo è di <?php echo $lunghezzaParagrafo ?> caratteri.</p>

    <hr>
    <p>il nuovo paragrafo censurato è: <?php echo $testoCensurato?></p>
    <p>che è ora lungo <?php echo $lunghezzaParagrafoCensurato  ?></p>
</body>
</html>