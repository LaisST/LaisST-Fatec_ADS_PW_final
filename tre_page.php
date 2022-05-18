<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TRE</title>
</head>

<body style="background: #009c3b;">
<form method="post" action="insert.php" name="dados" onSubmit="return enviardados();">
<table width="588" border="0" align="center">

<tr>
   <td height="85">
     
   </td>
</tr>
<tr>
   <td height="22"></td>
   <p style="text-align:center;"> <img style="text-align:center;" src="http://www.al.rs.gov.br/eleicoes/Portals/eleicoes/Skins/Eleicoes/imagens/logoEleicoes2018.png" alt="Logo Eleições">
   <td>
    <td><p style="text-align:center;">
    <button  style= "margin: 5px;height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" 
      formaction="SelectCandidato.php">Consultar Candidatos
      </button>
      

                          <button  style= "margin: 5px;height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" 
      formaction="SelectEleitor.php">Consultar Eleitor
      </button>
      </td>
      <td>
      <button  style= "margin: 5px;height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="CadCandidato_Page.php">Cadastrar Candidato
      </button>
          <button  style= "margin: 5px;height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="CadEleitor_Page.php">Cadastrar Eleitor
      </button>
      </td>
      <td>
      <button  style= "margin: 5px;height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" 
      type="submit" name="action" formaction="DeleteCandidato_Page.php">Deletar Candidato
      </button>
       <button  style= "margin: 5px;height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" 
      formaction="DeleteEleitor_Page.php">Deletar Eleitor
      </button>
      </td>
      <td>
        <button  style= "margin: 5px;height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" 
      formaction="updateCandidato_page.php">Atualizar Candidato
      </button>
      

      <button  style= "margin: 5px;height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" 
      formaction="updateEleitor_page.php">Atualizar Eleitor
      </button>
      
      
  </td>

</tr>
</table>
<div style="width: 80px; margin: 0 auto;">
    
       <p><button  style= "height:35px;width:80px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" 
      formaction="index.php">Voltar
      </button></p>
      </div> 
</form>
</body>

</html>