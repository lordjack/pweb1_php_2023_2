<?php
 include './header.php';
 include '../db.class.php';
?>

<?php
  $db = new DB();
  $db->conn();

  if($_POST){
    $db->insert("usuario",$_POST);
    header("location: UsuarioList.php");
  }

?>
    <h2>Sistema Academico</h2>
    <h3>Formulário Registrar Usuário</h3>

    <form action="UsuarioForm.php" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome"><br>

        <label for="cpf">CPF</label><br>
        <input type="text" name="cpf"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email"><br>

        <label for="senha">Senha</label><br>
        <input type="password" name="senha" ><br>

        <label for="c_senha">Confirmar Senha</label><br>
        <input type="password" name="c_senha" ><br>

        <button type="submit">Salvar</button>
        <a href="LoginForm.php"> Voltar </a>

    </form>
<?php include "./footer.php" ?>
