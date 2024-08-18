<?php
include 'conexao.php'; // seu arquivo de conexão ao banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_clinte'];
    $fantasia = $_POST['cli_fantasia'];
    $celular = $_POST['cli_celular'];

    $sql = "UPDATE tabela SET nome='$fantasia', email='$celular' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o registro: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
