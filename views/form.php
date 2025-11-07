<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Currículos</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/dinamicos.js"></script>
</head>
<body class="bg-light">

<div class="container mt-5 p-4 bg-white rounded shadow">
    <h2 class="mb-4">Gerador de Currículo</h2>
    <form action="../gerar.php" method="POST">

        <h4>Dados Pessoais</h4>
        <input class="form-control mb-2" type="text" name="nome" placeholder="Nome" required>

        <label>Data de Nascimento</label>
        <input class="form-control mb-2" type="date" id="nascimento" name="nascimento" required>

        <label>Idade</label>
        <input class="form-control mb-3" type="text" id="idade" name="idade" readonly>

        <h4 class="mt-4">Experiências Profissionais</h4>
        <div id="experiencias"></div>
        <button type="button" id="addExp" class="btn btn-secondary mt-2">+ Adicionar experiência</button>

        <h4 class="mt-4">Formação Acadêmica</h4>
        <div id="formacoes"></div>
        <button type="button" id="addForm" class="btn btn-secondary mt-2">+ Adicionar formação</button>

        <button class="btn btn-primary mt-4" type="submit">Gerar Currículo</button>
    </form>
</div>

<script src="../assets/js/main.js"></script>
</body>
</html>
