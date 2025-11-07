<?php
$nome = $_POST['nome'];
$nasc = $_POST['nascimento'];
$idade = $_POST['idade'];

$empresas = $_POST['empresa'] ?? [];
$cargos = $_POST['cargo'] ?? [];
$periodos = $_POST['periodo'] ?? [];
$atividades = $_POST['atividade'] ?? [];

$cursos = $_POST['curso'] ?? [];
$instituicoes = $_POST['instituicao'] ?? [];
$anos = $_POST['ano'] ?? [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Currículo Gerado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>body{ padding:40px; }</style>
</head>
<body>

<h2><?php echo $nome; ?></h2>
<p><strong>Idade:</strong> <?php echo $idade; ?> anos</p>
<p><strong>Data de nascimento:</strong> <?php echo $nasc; ?></p>
<hr>

<h3>Experiências Profissionais</h3>
<?php foreach ($empresas as $i => $emp): ?>
    <p><strong><?php echo $emp; ?></strong> - <?php echo $cargos[$i]; ?></p>
    <p><?php echo $periodos[$i]; ?></p>
    <p><?php echo $atividades[$i]; ?></p>
    <hr>
<?php endforeach; ?>

<h3>Formação Acadêmica</h3>
<?php foreach ($cursos as $i => $curso): ?>
    <p><strong><?php echo $curso; ?></strong> - <?php echo $instituicoes[$i]; ?> (<?php echo $anos[$i]; ?>)</p>
<?php endforeach; ?>

<button onclick="window.print();" class="btn btn-primary mt-4">Imprimir / Baixar PDF</button>

</body>
</html>
