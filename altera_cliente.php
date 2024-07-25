<?php
include 'conexao.php'; // seu arquivo de conexão ao banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE tabela SET nome='$nome', email='$email' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o registro: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
