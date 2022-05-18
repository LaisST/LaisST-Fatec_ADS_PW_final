<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastrar Candidato</title>
</head>

<body style="background: #009c3b;">

<h1  style="text-align:center; color: white" >CADASTRAR CANDIDATO</h1>
<form style="color: white" method="post" action="CadCandidato.php" name="dados" onSubmit="return enviardados();">

<table width="600" border="0" align="center">

   <tr>
      <td width="118">
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Número do Candidato: </font>
      </td>
      <td width="460">
         <input name="CodigoCandidato" type="text" class="formbutton" id="CodigoCandidato" size="52" maxlength="150" >
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
      <td width="118">
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Cargo Disputado: </font>
      </td>
      <td width="460">
            <select name="CargoDisputado" id="CargoDisputado">
                <option disabled selected>Escolha uma opção</option>
                 <option value="Presidente">Presidente</option>
                 <option value="Prefeito">Prefeito</option>
                 <option value="Vereador">Vereador</option>
             </select>
         <!--<input name="CargoDisputado" type="text" class="formbutton" id="CargoDisputado" size="52" maxlength="150">-->
      </td>
   </tr>

   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Data de Nascimento: </font>
      </td>
      <td>
         <font size="2">
            <input name="DataNascimento" type="date" id="DataNascimento" class="formbutton" >
         </font>
      </td>
   </tr>

   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Endereço:</font>
      </td>
      <td>
         <font size="2">
            <input name="Endereco" type="text" id="Endereco" size="52" maxlength="150" class="formbutton" >
         </font>
      </td>
   </tr>
   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Número do Partido: </font>
      </td>
      <td>
         <font size="2">
             <select name="CodigoPartido" id="CodigoPartido">
                 <option disabled selected>Escolha uma opção</option>
                 <option value="13">13</option>
                 <option value="45">45</option>
                 <option value="13">43</option>
             </select>
            <!--<input name="CodigoPartido" type="text" id="CodigoPartido" size="52" maxlength="150" class="formbutton">-->
         </font>
      </td>
   </tr>
   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Número Vice: </font>
      </td>
      <td>
         <font size="2">
            <select name="CodigoVice" id="CodigoVice">
                <option disabled selected>Escolha uma opção</option>
                 <option value="43123">Manuel Pereira</option>
                 <option value="45321">Jose Bezerra</option>
                 <option value="0">Não Se Aplica</option>
             </select>
            <!--<input name="CodigoVice" type="text" id="CodigoVice" size="52" maxlength="150" class="formbutton">-->
         </font>
      </td>
   </tr>
   <tr>
      <td>
         <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Código Municipio: </font>
      </td>
      <td>
         <font size="2">
            <select name="CodigoMunicipio" id="CodigoMunicipio">
                <option disabled selected>Escolha uma opção</option>
                 <option value="01">Poá</option>
                 <option value="02">Suzano</option>
             </select>
            <!--<input name="CodigoMunicipio" type="text" id="CodigoMunicipio" size="52" maxlength="150" class="formbutton">-->
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
               <input style= "height:35px;width:110px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;"name="Submit" type="submit" class="formobjects" value="Cadastrar">
               <input style= "height:35px;width:110px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;"name="Reset" type="reset" class="formobjects" value="Limpar campos">
               <button style= "height:35px;width:110px;border-radius:5px;background:#0066A2;color:white;border-style:outset;border-color:#0066A2;" type="submit" name="action" formaction="tre_page.php"> Voltar
               </button>
               <!--<button type='submit' formaction='pegar.php'>Consultar</button>-->
            </td>
         </tr>
      </table>
   </form>
</body>

</html>