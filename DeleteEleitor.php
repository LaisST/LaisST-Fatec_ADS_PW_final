<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Deletar Eleitor</title>
</head>

<body style="background: #009c3b;color: white;text-align:center;font-weight: bold; font-size: 22px">
<?php

include_once "conexao.php";

$codigo = $_POST['id'];

$sqlDelete = " DELETE FROM ELEITORES WHERE CodigoEleitor = '".$codigo."' ";

if (!mysqli_query($conexao, $sqlDelete)){
    die('Erro ao excluir o registro: '.mysqli_error($conexao));
}

echo "<CENTER> Registro deletado com sucesso.</br></center>";
mysqli_close($conexao);
//header("Location: select.php?mensagem=OK");
?>

</body>
</html>