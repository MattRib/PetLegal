<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Área do Admin</title>
    </head>
    <body>
        <?php
        if (isset($_POST['bcad'])) {

            /* require_once 'conexao.php';

              $cat = $_POST['categoria'];
              $tit = $_POST['titulo'];
              $res = $_POST['resumo'];
              $dat = date('Y-m-d', strtotime($_POST['data'])) . " " . $_POST['temp'] . ":00";
              $aut = $_POST['autor'];
              $con = $_POST['conteudo'];

              $ins = "INSERT INTO `artigo`(`categoria`, `titulo`, `resumo`, `data`, `autor`, `conteudo`) VALUES ('$cat', '$tit', '$res', '$dat', '$aut', '$con')";

              $insv = mysqli_query($conn, $ins);

              if ($insv) {
              echo "<script>alert('Sucesso ao cadastrar!!!')</script>";
              } else {
              echo "<script>alert('Erro ao cadastrar!!!')</script>";
              } */

            $uploaddir = 'img_art/';
            $uploadfile = $uploaddir . basename($_FILES['foto']['name']);

            echo '<pre>';
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
                echo "Arquivo válido e enviado com sucesso.\n";
            } else {
                echo "Possível ataque de upload de arquivo!\n";
            }

            echo 'Aqui está mais informações de debug:';
            print_r($_FILES);

            print "</pre>";
        }
        ?>

        <form enctype="multipart/form-data" action="#" method="post">
            <label for="foto">Selecione a imagem:</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
            <input type="file" id="foto" name="foto" ><br>
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" maxlength="30" placeholder="categoria"/><br>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" maxlength="30" placeholder="titulo"/><br>
            <label for="data">Data de publicação:</label>
            <input type="date" id="data" name="data">
            <input type="time" name="temp"><br>
            <label for="resumo">Resumo:</label><br>
            <textarea maxlength="200" id="resumo" name="resumo" placeholder="resumo"></textarea><br>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" placeholder="autor" maxlength="50"/><br>
            <label for="conteudo">Conteúdo:</label><br>
            <textarea id="conteudo" name="conteudo" placeholder="conteudo"></textarea><br>

            <input type="submit" name="bcad" value="Cadastrar"/>
        </form> 
    </body>
</html>


<?php ?>