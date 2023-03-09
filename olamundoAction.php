<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet"
    href= "https://www.w3schools.com/w3css/4/w3.css">
    <title>Area de Resultado</title>
</head>
<body class="w3-white">
<div class="w3-third w3-red w3-round-large w3-display-middle w3-padding w3-white
w3-center">
<h1>
<?php
$nota1 = $_GET['txtNota1'];
$nota2 = $_GET['txtNota2'];
$media = ($nota1 * $nota2);
echo 'Valor por m² <br> R$ ' .$media;
?>


</h1>


</body>
    
</html>