
<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Eleitores</title>
</head>

<body style="background: #009c3b;color: black;text-align:center;font-weight: bold; font-size: 22px">
    <h1  style="text-align:center; color: white;font-weight: bold;" >ELEITORES</h1>
<?php
require_once "conexao.php";
date_default_timezone_set('America/Sao_Paulo');

echo "</br></br>";
$sqlSelect = "SELECT CodigoEleitor, CPF, Nome, DataNascimento, Endereco, Biometria, CodigoZona, CodigoSecao from ELEITORES";
$rs = mysqli_query($conexao, $sqlSelect);
echo "</br>";

if (mysqli_num_rows($rs) > 0){
    while($row = mysqli_fetch_assoc($rs)){
        echo 
        "Nome: " .$row["Nome"].
        " - Título de Eleitor: ".$row["CodigoEleitor"].
        " - Endereço: " .$row["Endereco"];
        " - Possui Biometria? " .$row["Biometria"];
        " - Zona: " .$row["CodigoZona"];
        " - Seção: " .$row["CodigoSecao"];
        echo "</br>";
        echo "=====================================================================";
        echo "</br>";
    }
} else{
    echo "Não foram encontrados registros cadastrados!";
}

mysqli_close($conexao);
?>
</body>
</html>
