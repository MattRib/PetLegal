<!DOCTYPE html>
<html lang="pt-br">

    <?php include "head.php" ?>

    <body>

        <?php include "headeramin.php" ?>

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

        <form style="margin-top: 20px;" class="form-group container" enctype="multipart/form-data" action="#" method="post">
            <label class="h4 card-title" for="foto">Selecione a imagem:</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
            <input style="width: 400px" class="form-control" type="file" id="foto" name="foto" ><br>
            <label class="h4 card-title" for="categoria">Categoria:</label>
            <input style="width: 350px" class="form-control" type="text" id="categoria" name="categoria" maxlength="30" placeholder="categoria"/><br>
            <label class="h4 card-title" for="titulo">Título:</label>
            <input style="width: 350px" class="form-control" type="text" id="titulo" name="titulo" maxlength="30" placeholder="titulo"/><br>
            <label class="h4 card-title" for="data">Data de publicação:</label>
            <input style="width: 150px;" class="form-control" type="date" id="data" name="data">
            <label style="margin-top: 20px;" class="h4 card-title" for="hora">Hora:</label>
            <input style="width: 150px;" class="form-control" id="hora" type="time" name="temp"><br>
            <label class="h4 card-title" for="resumo">Resumo:</label><br>
            <textarea class="md-textarea form-control" maxlength="200" id="resumo" name="resumo" placeholder="resumo"></textarea><br>
            <label class="h4 card-title" for="autor">Autor:</label>
            <input style="width: 350px" class="form-control" type="text" id="autor" name="autor" placeholder="autor" maxlength="50"/><br>
            <label class="h4 card-title" for="conteudo">Conteúdo:</label><br>
            <textarea class="md-textarea form-control" id="conteudo" name="conteudo" placeholder="conteudo"></textarea><br>

            <input class="btn btn-info" type="submit" name="bcad" value="Cadastrar"/>
        </form> 
    </body>
</html>


<?php ?>