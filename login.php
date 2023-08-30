<?php
require_once "conexao.php"; // Inclui o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = addslashes($_POST["email"]);
    $password = addslashes($_POST["password"]);

    // Verificar o login no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login bem-sucedido, redirecionar para a página de sucesso
        header("Location: success.php");
        exit();
    } else {
        // Login falhou, exibir mensagem de erro
        $loginError = "Email ou senha incorretos.";
    }
}
?>
