<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro Eleitor</title>
</head>

<body style="background: #009c3b;color: white;text-align:center;font-weight: bold; font-size: 22px">

<?php
require_once "conexao.php";
echo "</br>";

    $CodigoEleitor = $_POST['CodigoEleitor'];
    $CPF = $_POST['CPF'];
    $Nome = $_POST['Nome'];
    $DataNascimento = $_POST['DataNascimento'];
    $Endereco = $_POST['Endereco'];
    $Email = $_POST['Email'];
    $Biometria = $_POST['Biometria'];
    $CodigoZona = $_POST['CodigoZona'];
    $CodigoSecao = $_POST['CodigoSecao'];

    $sqlInsert = "INSERT INTO ELEITORES (CodigoEleitor,CPF,Nome,DataNascimento,Endereco,Email,Biometria,CodigoZona,CodigoSecao) 
    values ('$CodigoEleitor', '$CPF', '$Nome', '$DataNascimento','$Endereco','$Email','$Biometria','$CodigoZona','$CodigoSecao')";
    
    $rs = mysqli_query($conexao, $sqlInsert)
    or
    die("Erro ao cadastrar os dados");
    
    echo "</br>";
    echo "Dados cadastrados com sucesso!";
?>
</body>
</html>