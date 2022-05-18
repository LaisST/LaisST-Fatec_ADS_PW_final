<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Deletar Eleitor</title>
</head>

<body style="background: #009c3b;color: white;text-align:center;font-weight: bold; font-size: 22px">
        <h1  style="text-align:center; color: white;font-weight: bold;" >Deletar Eleitor</h1>
   <form method="post" action="DeleteEleitor.php" name="dados" onSubmit="return enviardados();">

      <table width="588" border="0" align="center">

         <tr>
            <td width="180">
               <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Título de Eleitor: </font>
            </td>
            <td width="460">
               <input name="id" type="text" class="formbutton" id="id" size="52" maxlength="150">
            </td>
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
           <td  width="300" style="position:absolute; top:30%; left:40%;">
               <p><input name="Submit" type="submit" style= "height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" value="Deletar" ></p>
                             <p><input name="Reset" type="reset" style= "height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" value="Limpar campos"></p>
               <p><button style= "height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="SelectEleitor.php">Consultar
               </button></p>
               <p><button style= "height:35px;width:150px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="tre_page.php"> Voltar
               </button></p>
               <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
         </tr>
      </table>
   </form>
</body>

</html>