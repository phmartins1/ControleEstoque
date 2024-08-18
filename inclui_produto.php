<?php

require_once('db.class.php');


$prod_descricao		= $_POST['prod_descricao'];
$prod_custo		= $_POST['prod_custo'];
$prod_venda             = $_POST['prod_venda'];
$prod_medida           = $_POST['prod_medida'];
$prod_ativo		= 1;
$prod_qtd               = 0;
//(isset($_POST['prod_ativo'])? 1 : 0 ); ===>primeiro cadastro já entra como ativo

        $objDb = new db();
        $link = $objDb->conecta_mysql();

        //gravando Servico
        $sql = " INSERT INTO produto(produto, prod_custo, prod_venda, unidade_medida, prod_ativo, quantidade) 
                values ('$prod_descricao', '$prod_custo', '$prod_venda', '$prod_medida', '$prod_ativo', '$prod_qtd') ";
        
        //var_dump($sql);

        mysqli_query($link, $sql);

       
        header('Location: home.php?erro=1');
        
?>
