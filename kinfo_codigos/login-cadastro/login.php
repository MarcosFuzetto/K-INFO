<?php
require_once "conexao.php";

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    // Gera o hash da senha
    $hashed_password = cripto($senha);

    // Insere o novo usuário no banco de dados
    $q = "select * from usuario where email = '$email' and senha_hash = '$hashed_password'";
    $busca = $conexao->query($q);
    
    if ($busca->num_rows>0) {
        echo "<script>alert('Usuário logado com sucesso'); window.location.href = '../home.php';</script>";
    } else {
        echo "<script>alert('Erro ao logar usuário'); window.location.href = 'login.html';</script>";
    }     
    $stmt->close();
}

    
?>