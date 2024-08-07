<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<h2>Tabela com dados PHP</h2>
    
<?php
$alunos = [
    'aluno' => [
        [
            'nome' => "fabio",
            'endereco' => "rua abc",
            'idade' => 20,
            'cidade' => "guanambi",
        ],
        [
            'nome' => "pedro",
            'endereco' => "rua 123",
            'idade' => 17,
            'cidade' => "candiba",
        ],
        [
            'nome' => "luna",
            'endereco' => "rua aaa",
            'idade' => 16,
            'cidade' => "cacule",
        ]
    ]
];
?>

<table>
  <tr>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Idade</th>
    <th>Cidade</th>
  </tr>
  <tr>
    <td><?php echo $alunos['aluno'][0]['nome']; ?></td>
    <td><?php echo $alunos['aluno'][0]['endereco']; ?></td>
    <td><?php echo $alunos['aluno'][0]['idade']; ?></td>
    <td><?php echo $alunos['aluno'][0]['cidade']; ?></td>
  </tr>
  <tr>
    <td><?php echo $alunos['aluno'][1]['nome']; ?></td>
    <td><?php echo $alunos['aluno'][1]['endereco']; ?></td>
    <td><?php echo $alunos['aluno'][1]['idade']; ?></td>
    <td><?php echo $alunos['aluno'][1]['cidade']; ?></td>
  </tr>
  <tr>
    <td><?php echo $alunos['aluno'][2]['nome']; ?></td>
    <td><?php echo $alunos['aluno'][2]['endereco']; ?></td>
    <td><?php echo $alunos['aluno'][2]['idade']; ?></td>
    <td><?php echo $alunos['aluno'][2]['cidade']; ?></td>
  </tr>
</table>

<table>
  <tr>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Idade</th>
    <th>Cidade</th>
  </tr>
  <?php for ($i = 0; $i < count($alunos['aluno']); $i++) { ?>
    <tr>
      <td><?php echo $alunos['aluno'][$i]['nome']; ?></td>
      <td><?php echo $alunos['aluno'][$i]['endereco']; ?></td>
      <td><?php echo $alunos['aluno'][$i]['idade']; ?></td>
      <td><?php echo $alunos['aluno'][$i]['cidade']; ?></td>
    </tr>
  <?php } ?>
</table>

<h2>array como lista ordenada</h2>

<?php
$listaordenada = array('fabio', 'antonio', 'joao');

echo '<pre>';
print_r($listaordenada);
echo '</pre>';
?>

<?php
echo '<h2> 1.1 - adicionar dados ao array </h2>';
$listaordenada[] = 'pedro';
$listaordenada[] = 'hubert';

echo '<pre>';
print_r($listaordenada);
echo '</pre>';
?>

<?php
echo '<h2> 2.1 - adicionar dados ao array associativo </h2>';
$var = [
    'nome' => 'fabio',
    'endereco' => 'rua sete de setembro',
    'idade' => 24
];

echo '<pre>';
print_r($var);
echo '</pre>';

echo '<h2> 2.2 - adicionar dados ao array associativo </h2>';
$var['telefone'] = '123456789';
$var['cep'] = '0000-000';

echo '<h2> 2.3 - substituir dados no array associativo </h2>';
$var['cidade'] = 'pindai';

echo '<pre>';
print_r($var);
echo '</pre>';
?>

<?php
echo '<h2> 3 - array multidimensional</h2>';

$array = [
    'alunos' => [
        ['id' => 1, 'nome' => 'Fabio', 'idade' => 20],
        ['id' => 2, 'nome' => 'Pedro', 'idade' => 32],
        ['id' => 3, 'nome' => 'Luna', 'idade' => 42]
    ]
];
?>
<pre>
<?php print_r($array); ?>
</pre>

</body>
</html>
