<?php
$nome = $_POST['nome'];
$password = $_POST['password'];
$newString = str_replace($password, "***", $nome)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WordSecret</title>
</head>

<body>
    <h2><?php echo $nome . " " . "Il tuo nome ha : " . strlen($nome) . " " . "caratteri"; ?></h2>
    <h2><?php echo $newString . " " . "La tua password contiene : " . strlen($password) . " " . "caratteri"; ?></h2>

</body>

</html>