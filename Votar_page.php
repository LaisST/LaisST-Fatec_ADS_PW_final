<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Votar</title>
</head>

<body style="background: #009c3b;">

<h1  style="text-align:center; color: white" >Votar</h1>
<form style="color: white" method="post" action="Votar.php" name="dados" onSubmit="return enviardados();">

<table width="600" border="0" align="center">

   <tr>
      <td width="118">
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Número do Título de Eleitor: </font>
      </td>
      <td width="460">
         <input name="CodigoEleitor" type="text" class="formbutton" id="CodigoEleitor" size="52" maxlength="150">
      </td>
   </tr>

   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Número do Candidato: </font>
      </td>
      <td>
         <font size="2">
            <input name="CodigoCandidato" type="text" id="CodigoCandidato" size="52" maxlength="150" class="formbutton">
         </font>
      </td>
   </tr>

   
   </tr>
         <tr>
            <td height="85">
               <p><strong>
                     <font face="Verdana, Arial, Helvetica, sans-serif">
                        <font size="1">
                        </font>
                     </font>
                  </strong></p>
            </td>
         </tr>
         <tr>
            <td height="22"></td>
            <td>
               <input style= "height:35px;width:110px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;"name="Submit" type="submit" class="formobjects" value="Confirmar">
               <input style= "height:35px;width:110px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;"name="Reset" type="reset" class="formobjects" value="Limpar campos">
               <button style= "height:35px;width:110px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="index.php"> Voltar
               </button>
               <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
         </tr>
      </table>
   </form>
</body>

</html>