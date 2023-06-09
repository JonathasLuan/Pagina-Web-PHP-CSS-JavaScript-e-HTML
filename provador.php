<?php
session_start();

/*echo $_SESSION['id'];
echo $_SESSION['senha'];
echo session_id();*/


if (session_id() != $_SESSION['id']) {
  header('Location: entrar.php');
  return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Provador</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="dark-mode.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <?php
    include('header1.php');
    ?>
    <?php
    include('barra-pesquisa.php');
    ?>
    <?php
    // Verifica se o usuário já fez login
    if (session_id() == true) {
      // usuário já fez login, exibe o menu de sessão iniciada
      include('menu-logado.php');
    } else {
      // usuário não fez login, exibe o menu padrão
      include('menu-padrao.php');
    }
    ?>
  </header>
  <p>Nesta página o usuário poderá criar uma versão sua em avatar e receber recomendações de moda e estilo para que
    possa balizar suas escolhas, caso ainda esteja indeciso. Serão recomendações baseadas nas características fornecidas
    do que combina melhor com este cliente, levando em conta: cor de pele, formato de rosto, tipo de cabelo e tamanho,
    barba e muito mais.</p>

  <?php
  include('footer.php');
  include('set_theme_session.php');
  ?>
</body>

</html>