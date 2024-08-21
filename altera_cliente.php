<?php

require_once('db.class.php');

$objDb = new db();
$link = $objDb->conecta_mysql();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_cliente'];
    $fantasia = $_POST['cli_fantasia'];
    $celular = $_POST['cli_celular'];
    $razao = $_POST['cli_razao'];
    

    $sql = "UPDATE cliente SET 
    cli_fantasia='$fantasia', 
    cli_celular='$celular', 
    cli_razao='$razao'
    WHERE id_cliente=$id";

    var_dump($sql);

    if (mysqli_query($link, $sql)) {
        echo "Registro atualizado com sucesso!";
        mysqli_close($link);
        header('Location: home.php?erro=9');
    } else {
        echo "Erro ao atualizar o registro: " . mysqli_error($link);
        mysqli_close($link);
    }
   
    

}
?>
