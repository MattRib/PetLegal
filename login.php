<!DOCTYPE html>
<html>

<head>
    <?php include "head.php" ?>
</head>

<body>

    <?php include "header2.php" ?>

        <?php
        if (isset($_POST['logar'])) {

            require_once 'conexao.php';

            $log = $_POST['usuario'];
            $sen = $_POST['senha'];

            $sqllog = "SELECT usuario, senha FROM admin WHERE usuario='$log' AND senha='$sen' AND status='ativo'";

            $v = mysqli_query($conn, $sqllog);

            $foi = mysqli_fetch_assoc($v);

            if ($foi) {
                echo "<scrip>alert('Foi guerreiro!!!')</script>";
                //$_SESSION['admin'] = $foi['usuario'];
                //header("location:area.php");
            } else {
                echo "<scrip>alert('Usuario ou senha incorretos!!!')</script>";
            }
        }
        ?>

        <div class="container my-4" align="center">
            <img src="img/tool.png" height="250px;" style="">
        </div>

            <!-- form login -->
            <form class="text-center border border-light p-4 container" style="width:500px;margin-top:80px;margin-bottom:80px;">

                <p class="h4 mb-4">login</p>

                <!-- usuário -->
                <input type="usuario" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Usuário">

                <!-- senha -->
                <input type="senha" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Senha">

                <!-- Entrar button -->
                <button class="btn btn-pink my-4" type="button">Entrar</button>

            </form>
            <!-- form login -->

            <?php include "footer.php" ?>

</body>

</html>