<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Área do Admin</title>    
    <?php include "head.php"; ?>
    </head>
    
    <body>
        <header>
           <?php include "header.php"; ?>
        </header>
    <?php

        
        require_once 'conexao.php';
        
        $selart = "SELECT * FROM artigo";

        $valids = mysqli_query($conn, $selart);
        ?>
        <div class="container">
            </br><h1>Lista de categorias<h1></br>
        <table class="table table-striped table-responsive-md btn-table">        
            <tr>
                <th>Categoria</th>
                <th>Título</th>
                <th>Data de publicação</th>
                <th>Destino</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($valids)) { ?>
                <tr>
                    <td><?=$row['categoria']?></td>
                    <td><?=$row['titulo']?></td>
                    <td><?=date("d/m/Y", strtotime($row['data']))?></td>
                    <td><a href="altart.php?b=<?=$row['id_artigo']?>">Alterar</a></td>
                    <td><a href="excart.php?b=<?=$row['id_artigo']?>">Excluir</a></td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </body>
</html>