<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Atualizar Candidato</title>
</head>

<body style="background: #009c3b;color: black;text-align:center;font-weight: bold; font-size: 22px">

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

    $sqlUpdate = "UPDATE ELEITORES SET 
    CPF = '$CPF',
    Nome = '$Nome',
    DataNascimento = '$DataNascimento',
    Endereco = '$Endereco',
    Email = '$Email',
    Biometria='$Biometria',
    CodigoZona = '$CodigoZona',
    CodigoSecao = '$CodigoSecao' 
    WHERE ELEITORES.CodigoEleitor = '$CodigoEleitor'";
    

    
    $rs = mysqli_query($conexao, $sqlUpdate)
    or
    die("<h2><font color=white>Erro ao atualizar os dados</font></h2>");
    
    echo "</br>";
    echo "<h2><font color=white>Dados do Candidato Atualizados com sucesso!</font></h2>";
    
?>



</body>
</html>