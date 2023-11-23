<?php
session_start();
    if(!$_SESSION['logado']) {
        header('Location: ./login.php');
        exit();
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEICULO</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    

    <form action="veiculo.php">
     
    <h2>CADASTRO DE VEICULO</h2>
    <label for="cor"><b>COR</b></label>
        <input type="text" name="cor">
            <br>
    <label for="marca"><b>MARCA</b></label>
        <input type="text" name="marca">
            <br>
    <label for="modelo"><b>MODELO</b></label> 
        <input type="text" name="modelo">
            <br>
    <label for="ano"><b>ANO</b></label>  
        <input type="text" name="ano">
            <br>
    <label for="tipo"><b>TIPO</b></label>
     
        <input type="text" name="tipo">
            <br>
    <label for="placa"><b>PLACA</b></label>
        <input type="text" name="placa">
        <input type="submit" value="salvar">
   
       

</form>
<a href='./unidade.html'></a>
</body>
</html>00