<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible">
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<?php
    include "header.php";
?>

<hr>

<body>

    <hr>
    <h1>Cadastro de Colaboradores</h1>
    <hr>

    <section>

        <form method="post" action="">

        <fieldset>

            <legend>Informações Pessoais:</legend>

            Colaborador(a):
            <input type="text" name="nome" maxlength="40" required autofocus><br><br>

            Setor:
            <input type="text" name="setor" maxlength="30" required><br><br>

            Entrada no Critt:
            <input type="date" name="dataEntrada" required><br><br>

            Saída no Critt:
            <input type="date" name="dataSaida"><br><br>

            Tipo de colaborador:
            <select name="tipoColaborador">
                <option value="servidor">Servidor</option>
                <option value="bolsa12">Bolsista 12 Horas</option>
                <option value="bolsa20">Bolsista 20 Horas</option>
                <option value="bolsa40">Bolsista 40 Horas</option>
                <option value="terceirizado">Terceirizado</option>
                <option value="outros">Outros</option>
            </select><br><br>
       
            RG:
            <input type="text" name="rg" maxlength="10" required><br><br>

            Órgão expedidor:
            <input type="text" name="orgao" maxlength="10" required><br><br>

            CPF:
            <input type="text" name="cpf" maxlength="11" required><br><br>

            Data de nascimento:
            <input type="date" name="dataNascimento"><br><br>

            Nacionalidade:
            <input type="text" name="nacionalidade" maxlength="20" required><br><br>

            Estado civil:
            <select name="estadoCivil">
                <option value="solteiro">Solteiro(a)</option>
                <option value="casado">Casado(a)</option>
                <option value="viuvo">Viúvo(a)</option>
                <option value="divorciado">Divorciado(a)</option>
            </select><br><br>

            Nome do pai:
            <input type="text" name="nomePai" maxlength="40"><br><br>

            Nome da mãe:
            <input type="text" name="nomeMae" maxlength="40"><br><br>

            Endereço:
            <input type="text" name="endereco" maxlength="50"><br><br>

            Bairro:
            <input type="text" name="bairro" maxlength="30"><br><br>

            Cidade:<br>
            <input type="text" name="cidade" maxlength="30"><br><br>

            Estado:
            <select name="estado">
                <option selected>Escolha...</option>
                <option>AC</option>
                <option>AL</option>
                <option>AP</option>
                <option>AM</option>
                <option>BA</option>
                <option>CE</option>
                <option>DF</option>
                <option>ES</option>
                <option>GO</option>
                <option>MA</option>
                <option>MT</option>
                <option>MS</option>
                <option>MG</option>
                <option>PA</option>
                <option>PB</option>
                <option>PR</option>
                <option>PE</option>
                <option>PI</option>
                <option>RJ</option>
                <option>RN</option>
                <option>RS</option>
                <option>RO</option>
                <option>RR</option>
                <option>SC</option>
                <option>SP</option>
                <option>SE</option>
                <option>TO</option>
            </select><br><br>
            
            CEP:
            <input type="text" name="cep" maxlength="15" required><br><br>

            Telefone:
            <input type="tel" name="telefone" maxlength="12"><br><br>

            Celular:
            <input type="tel" name="celular" maxlength="12"><br><br>

            Email:
            <input type="email" name="email" maxlength="30" required><br><br>

            Curso de formação:
            <input type="text" name="cursoFormacao" maxlength="20"><br><br>

            Previsão de formatura:
            <input type="date" name="previsaoFormatura" maxlength="20"><br><br>

            Matrícula/Siape:
            <input type="text" name="matricula" maxlength="20"><br><br>

            Banco:
            <input type="text" name="banco" maxlength="20"><br><br>

            Agência:
            <input type="text" name="agencia" maxlength="20"><br><br>

            Conta:
            <input type="text" name="contaCorrente" maxlength="20"><br><br>

            Lançamento no Siga:
            <input type="date" name="lancamentoSiga" maxlength="20"><br><br>

    </fieldset>

    <hr>

            <input type="submit" value="Cadastrar" name="cadastra" class="btn">

            <input type="reset" value="Cancelar" name="cancela" class="btn">

        </form>

    </section>
    
</body>

<hr>

<?php
    include "footer.php";
?>

</html>
