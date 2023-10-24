<?php
 include './db.class.php';

include "./paginas/cabecalho.inc.php";
include "./paginas/menu.inc.php";
include "./paginas/conteudo.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $db = new DB();
        $db->conn();

        $dados = $db->select("aluno");

        // <input type="text" name="nome" />
        $dadosAluno = [
            'nome'=> "Jackson",
            'cpf'=>"55500055599",
            'telefone'=>"49 8800-5500",
        ];

        // $db->insert("aluno", $dadosAluno);

        //var_dump($dados);
    ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($dados as $item){
            echo "<tr>";
            echo "<th scope='row'>$item->id</th>";
            echo "<td>$item->nome</td>";
            echo "<td>$item->cpf</td>";
            echo "<td>$item->telefone</td>";
            echo "</tr>";
        }
    ?>
  </tbody>
</table>

<?php
    include "./paginas/rodape.inc.php";
?>
</body>
</html>