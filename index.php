<?php

session_start();

if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página principal</title>
</head>
<body>
<h1>Bem vindo <?= $_SESSION['username'] ?></h1>
<h2>Crie o seu orçamento: </h2>
<form action="">
    <div class="listaServicos">
        <div class="itemServico">
            <label>
                <input type="text" name="descricao[]" placeholder="Descreva o serviço" required>
            </label>

            <select name="tipoCalculo[]" id="">
                <option value="global">Preço Global</option>
                <option value="fixo">Preço Fixo</option>
                <option value="metro">Por Metro (m²)</option>
            </select>
            <br/>
            <label>
                <input type="number" name="quantidade[]" placeholder="Qtd" step="0.01">
            </label>
            <label >
                <input type="number" name="valor[]" placeholder="R$" step="0.01">
            </label>
            <br/>
            <br/>
        </div>
    </div>

    <button type="button" id="btn-adicionar">+ Adicionar novo serviço</button>
    <button type="button" id="btn-remover">- remover último serviço</button>
    <br>
    <br>
    <input type="submit" value="Gerar Orçamento">
</form>
<a href="functions/logout.php">Sair</a>
</body>
<script>
    document.getElementById('btn-adicionar').addEventListener('click', function () {
        let listaServicos = document.querySelector('.listaServicos');
        let itemServico = listaServicos.querySelector('.itemServico:last-child').cloneNode(true);
        itemServico.querySelectorAll('input').forEach(input => input.value = '');
        listaServicos.appendChild(itemServico);
    });

    document.getElementById('btn-remover').addEventListener('click', function () {
        let listaServicos = document.querySelector('.listaServicos');
        let itemServico = listaServicos.querySelector('.itemServico:last-child');
        let totalItens = listaServicos.querySelectorAll('.itemServico').length;
        if (itemServico && totalItens > 1) {
            listaServicos.removeChild(itemServico);
        }
    })
</script>
</html>