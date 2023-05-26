<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if ((strlen($_POST['senha']) == 0)) {
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuário WHERE email = '$email' AND senha = '$senha'";
        $mysqli_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $mysqli_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $mysqli_query->fetch_assoc();

            if (session_id() == '') {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou Senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>
    <h1>Acessar conta:</h1>
    <form action="" method="POST">
        <p>
            <label for="">E-mail</label>
            <input type="email" name="email">
        </p>
        <p>
            <label for="">Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>

</html>