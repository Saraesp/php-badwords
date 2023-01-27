<?php
    $paragrafo = $_POST ['paragrafo'];
    $censura = $_POST ['censura'];

    $new_paragrafo = str_replace($censura, '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>PARAGRAFO SENZA CENSURA E LUNGHEZZA</h3>
    <p><?php echo $paragrafo?></p>
    <p><?php echo strlen($paragrafo)?></p>
    <h3>PARAGRAFO CON CENSURA E LUNGHEZZA</h3>
    <p><?php echo $new_paragrafo?></p>
    <p><?php echo strlen($new_paragrafo)?></p>
</body>
</html>
