<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Área do Admin</title>
    </head>
    <body>
        <?php
        
        require_once 'conexao.php';
        
        $selart = "SELECT * FROM artigo";

        $valids = mysqli_query($conn, $selart);
        ?>
        <table>
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
                </tr>
            <?php } ?>
        </table>
    </body>
</html>