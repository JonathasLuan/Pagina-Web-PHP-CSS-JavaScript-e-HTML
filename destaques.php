<?php
session_start();

/*echo $_SESSION['id'];
echo $_SESSION['senha'];
echo session_id();*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destaques</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./destaquesCSS.css">
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
    if (isset($_SESSION['id']) && session_id() == $_SESSION['id']) {
      // usuário já fez login, exibe o menu de sessão iniciada
      include('menu-logado.php');
    } else {
      // usuário não fez login, exibe o menu padrão
      include('menu-padrao.php');
    }
    ?>
  </header>
  <main>
    <div id="conteudo">
      <p>Nesta página serão exibidos os serviços em destaque.</p>
    </div>
    <img src="<?php
    $email = $_SESSION['email'];
    $sql = "SELECT id_usuario FROM usuário WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $id = $row['id_usuario'];
    }

    include_once('conexao.php');
    $sql = "SELECT * FROM arquivos WHERE id_usuario_fk = '$id'";
    // Execute a consulta SQL para recuperar o arquivo do banco de dados
    $query = $mysqli->query($sql);

    // Verificar se a consulta retornou algum resultado
    if ($resultado = $query->fetch_assoc()) {
      $caminhoArquivo = $resultado['caminho'];
      echo $caminhoArquivo;
    } else {
      echo "ERRO!!!";
    }
    ?>" alt="">
    <div id="conversas">
      <!-- A lista de conversas será adicionada aqui -->
    </div>
    <button id="adicionarConversa">Adicionar Conversa</button>

    <?php
    include('footer.php');
    include('set_theme_session.php');
    ?>
    <script>
      // Obtém a referência do botão e do elemento que irá conter a lista de conversas
      const btnAdicionarConversa = document.getElementById("adicionarConversa");
      const divConversas = document.getElementById("conversas");

      // Função para adicionar um novo item na lista de conversas
      function adicionarConversa() {
        // Cria um novo elemento div e define suas propriedades
        const novaConversa = document.createElement("div");
        novaConversa.classList.add("item");
        novaConversa.textContent = "Nova Conversa";

        // Adiciona o novo elemento div na lista de conversas
        divConversas.appendChild(novaConversa);
      }

      // Adiciona um listener de evento para o botão "Adicionar Conversa"
      btnAdicionarConversa.addEventListener("click", adicionarConversa);
    </script>
  </main>
</body>

</html>