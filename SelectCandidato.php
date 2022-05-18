
<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Candidatos</title>
</head>

<body style="background: #009c3b;color: black;font-weight: bold;text-align:center; font-size: 22px">
    <h1  style="text-align:center; color: white;font-weight: bold;" >CANDIDATOS</h1>
<?php
require_once "conexao.php";
date_default_timezone_set('America/Sao_Paulo');

echo "</br></br>";
$sqlSelect = "SELECT CodigoCandidato, Nome, CargoDisputado from CANDIDATOS";
$rs = mysqli_query($conexao, $sqlSelect);
echo "</br>";

if (mysqli_num_rows($rs) > 0){
    while($row = mysqli_fetch_assoc($rs)){
        echo 
        "Número:" .$row["CodigoCandidato"].
        "</br>Nome: ".$row["Nome"].
        "</br>Cargo: " .$row["CargoDisputado"];
        echo "</br>";
        echo "*************************************";
        echo "</br>";
    }
} else{
    echo "Não foram encontrados registros cadastrados!";
}

mysqli_close($conexao);
?>
</body>
</html>
