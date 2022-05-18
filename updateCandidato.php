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
    
    $CodigoCandidato = $_POST['CodigoCandidato'];
    $Nome = $_POST['Nome'];
    $CargoDisputado = $_POST['CargoDisputado'];
    $DataNascimento = $_POST['DataNascimento'];
    $Endereco = $_POST['Endereco'];
    $CodigoPartido = $_POST['CodigoPartido'];
    $CodigoVice = $_POST['CodigoVice'];
    $CodigoMunicipio = $_POST['CodigoMunicipio'];

    $sqlUpdate = "UPDATE CANDIDATOS SET Nome = '$Nome', CargoDisputado = '$CargoDisputado',DataNascimento ='$DataNascimento',Endereco ='$Endereco',CodigoPartido='$CodigoPartido',CodigoVice ='$CodigoVice',CodigoMunicipio = '$CodigoMunicipio' WHERE CodigoCandidato = '$CodigoCandidato'"; 
    
    
    $rs = mysqli_query($conexao, $sqlUpdate)
    or
    die("<h2><font color=white>Erro ao atualizar os dados</font></h2>");
    
    echo "</br>";
    echo "<h2><font color=white>Dados do Candidato Atualizados com sucesso!</font></h2>";
    
?>



</body>
</html>