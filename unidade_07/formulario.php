<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
   <form method="post" id="fContato" action="dados_form.php">
       <fieldset id="usuario"><legend>Identificação do Usuário</legend>
                <p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="60" maxlength="60" placeholder="Nome Completo"/> </p>
                <p><label for="cSenha">Senha:</label> <input type="password" name="tSenha" id="cSenha" size="6" maxlength="6" placeholder="06 dígitos"/></p>
                <p><label for="cEmail">E-mail:</label> <input type="email" name="tEmail" id="cEmail" size="30" maxlength="60" placeholder="Digite seu e-mail"/></p>
                <fieldset id="sexo"><legend>Sexo:</legend>
                    <input type="radio" name="tSexo" id="cFem" checked value="F"><label for="cFem">Feminino</label><br>
                    <input type="radio" name="tSexo" id="cMas" value="M"><label for="cMas">Masculino</label></fieldset>
                <p><label for="cData">Data de nascimento:</label> <input type="date" name="tData" id="cData" size="10" maxlength="10" placeholder="Nascimento"></p>
       </fieldset>
       <fieldset id="endereco"><legend>Endereço</legend>
                <p><label for="cLogradouro">Logradouro: </label><input type="text" name="tLogradouro" id="cLogradouro" size="60" maxlength="60" placeholder="Nome do Logradouro: Rua, Avenida, Travessa, etc"></p>
                <p><label for="cNum">Número: </label><input type="number" name="tNum" id="cNum" min="0" max="99999" placeholder="Número"></p>
           <p><label for="cEstado">Estado:</label><select name="tEstado" id="cEstado">
                   <optgroup label="Região CentroOeste">
                       <option value="DF">Distrito Federal</option>
                       <option value="GO">Goias</option>
                       <option value="MT">Mato Grosso</option>
                       <option value="MS">Mato Grosso do Sul</option>
                   </optgroup>
                   <optgroup label="Região Nordeste">
                       <option value="AL">Alagoas</option>
                       <option value="BA">Bahia</option>
                       <option value="CE">Ceará</option>
                       <option value="MA">Maranhão</option>
                       <option value="PB">Paraíba</option>
                       <option value="PE">Pernabumco</option>
                       <option value="PI">Piauí</option>
                       <option value="RN">Rio Grande do Norte</option>
                       <option value="SE">Sergipe</option>
                   </optgroup>
                   <optgroup label="Região Norte">
                       <option value="AC">Acre</option>
                       <option value="AP">Amapá</option>
                       <option value="AM">Amazonas</option>
                       <option value="PA">Pará</option>
                       <option value="RO">Rondonia</option>
                       <option value="RR">Roraima</option>
                       <option value="TO">Tocantins</option>
                   </optgroup>
                   <optgroup label="Região Sudeste">
                       <option value="ES">Espírito Santo</option>
                       <option value="MG" selected>Minas Gerais</option>
                       <option value="RJ">Rio de Janeiro</option>
                       <option value="SP">São Paulo</option>
                   </optgroup>
                   <optgroup label="Região Sul">
                       <option value="PR">Paraná</option>
                       <option value="RS">Rio Grande do Sul</option>
                       <option value="SC">Santa Catarina</option>
                   </optgroup>
               </select> </p>
                <p><label for="cCidade">Cidade:</label> <input type="text" name="tCidade" id="cCidade"></p>
           <p><input type="submit" value="Enviar"></p>
       </fieldset>
    </form>
    </body>
</html>