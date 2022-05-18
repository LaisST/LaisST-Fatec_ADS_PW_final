<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Atualizar Eleitor</title>
</head>

<body style="background: #009c3b;">

<h1  style="text-align:center; color: white" >Atualizar Dados do Eleitor</h1>
<form style="color: white" method="post" action="updateEleitor.php" name="dados" onSubmit="return enviardados();">

<table width="600" border="0" align="center">

   <tr>
      <td width="120">
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Número do Título de Eleitor: </font>
      </td>
      <td width="460">
         <input name="CodigoEleitor" type="text" class="formbutton" id="CodigoEleitor" size="52" maxlength="150">
      </td>
   </tr>

   <tr>
    <td width="118">
        <font size="2" face="Verdana, Arial, Helvetica, sans-serif">CPF:  </font>
    </td>
    <td width="460">
        <input name="CPF" type="text" class="formbutton" id="CPF" size="52" maxlength="150">
    </td>
</tr>
<tr>
      <td width="200">
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome: </font>
      </td>
      <td width="460">
         <input name="Nome" type="text" class="formbutton" id="Nome" size="52" maxlength="150">
      </td>
   </tr>
   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Data de Nascimento: </font>
      </td>
      <td>
         <font size="2">
            <input name="DataNascimento" type="date" id="DataNascimento" class="formbutton">
         </font>
      </td>
   </tr>

   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Endereço:</font>
      </td>
      <td>
         <font size="2">
            <input name="Endereco" type="text" id="Endereco" size="52" maxlength="150" class="formbutton">
         </font>
      </td>
   </tr>
   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Email </font>
      </td>
      <td>
         <font size="2">
            <input name="Email" type="text" id="Email" size="52" maxlength="150" class="formbutton">
         </font>
      </td>
   </tr>
   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Biometria Cadastrada: </font>

      </td>
      <td>
         <font size="2">
            <select id="Biometria" name="Biometria" >
                <option disabled selected>Escolha uma opção</option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>
            <!--<input name="Biometria" type="text" id="Biometria" size="52" maxlength="150" class="formbutton">-->
         </font>
      </td>
   </tr>
   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Zona: </font>
      </td>
      <td>
         <font size="2">
            <select name="CodigoZona" id="CodigoZona" >
                <option disabled selected>Escolha uma opção</option>
                <option value="219">219</option>
                <option value="181">181</option>
                <option value="201">201</option>
            </select>
            <!--<input name="CodigoZona" type="text" id="CodigoZona" size="52" maxlength="150" class="formbutton">-->
         </font>
      </td>
   </tr>
   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Seção: </font>
      </td>
      <td>
         <font size="2">
            <select name="CodigoSecao" id="CodigoSecao" >
                <option disabled selected>Escolha uma opção</option>
                <option value="0544">0544</option>
                <option value="2584">2584</option>
                <option value="1105">1105</option>
            </select>
            <!--<input name="CodigoSecao" type="text" id="CodigoSecao" size="52" maxlength="150" class="formbutton">-->
         </font>
      </td>
   </tr>

         <tr>
            <td height="85">
                <!--Pulo de linha-->

            </td>
         </tr>
         <tr>
            <td height="22"></td>
            <td>
               <input style= "height:35px;width:110px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" name="Submit" type="submit" class="formobjects" value="Atualizar">
               <input style= "height:35px;width:110px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" name="Reset" type="reset" class="formobjects" value="Limpar campos">
               <button style= "height:35px;width:110px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="tre_page.php"> Voltar
               </button>
               <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
         </tr>
      </table>
   </form>
</body>

</html>