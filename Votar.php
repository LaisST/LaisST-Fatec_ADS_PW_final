<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Votar</title>
</head>

<body style="background: #009c3b; text-align:center; color: white;" >
<p style="text-align:center;"> <img style="text-align:center;" src="http://www.al.rs.gov.br/eleicoes/Portals/eleicoes/Skins/Eleicoes/imagens/logoEleicoes2018.png" alt="Logo Eleições">

<?php
require_once "conexao.php";
echo "</br>";

    $CodigoEleitor = $_POST['CodigoEleitor'];
    $CodigoCandidato = $_POST['CodigoCandidato'];
  
    $sqlInsert = "INSERT INTO VOTOS (CodigoEleitor,CodigoCandidato) 
    values ('$CodigoEleitor', '$CodigoCandidato')";
    
    $rs = mysqli_query($conexao, $sqlInsert)
    or
    die("<h1>Erro ao cadastrar os dados</h1>");
    
    echo "</br>";
    echo "<h1>Dados cadastrados com sucesso!</h1>";
?>

</body>
</html>