<?php
require_once "conexao.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar-senha'];
    $padrao_senha =   '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$%&*!?])[A-Za-z\d@$%&*!?]{6,}$/';


    if ($username == "") {
        echo "<script>alert('Preencha o nome de usuário'); window.location.href = 'cadastro.html';</script>";
    } else if ($email == "") {
        echo "<script>alert('Preencha o e-mail'); window.location.href = 'cadastro.html';</script>";
    } else if ($senha == "") {
        echo "<script>alert('Preencha a senha'); window.location.href = 'cadastro.html';</script>";
    } else if ($senha != $confirmar_senha) {
        echo "<script>alert('As senhas não conferem'); window.location.href = 'cadastro.html';</script>";
    } else if (!preg_match($padrao_senha, $senha)){
        echo "<script>alert('A senha deve ter pelo menos 6 caracteres, incluindo uma letra maiúscula, uma letra minúscula, um número e um caractere especial.'); window.location.href = 'cadastro.html';</script>";
    }
        // Gera o hash da senha
        $hashed_password = cripto($senha);
        
        // Prepara a consulta SQL
        $q = "INSERT INTO usuario (email, senha_hash, username) VALUES ('$email', '$hashed_password', '$username')";
        $stmt = $conexao->prepare($q);
        
        if ($stmt->execute()) {
            echo "<script>alert('Usuário cadastrado com sucesso'); window.location.href = 'login.html';</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar o usuário'); window.location.href = 'cadastro.html';</script>";
        }

        $stmt->close(); // Fecha a declaração
    }
?>
