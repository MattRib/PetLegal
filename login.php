<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>

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
        
        <form action="#" method="post" autocomplete="off" >
            <label for="login">Login</label>
            <input type="text" id="login" name="usuario" maxlength="20" autofocus /><br/>
            <label for="senha1">Senha</label>
            <input type="password" id="senha1" name="senha" maxlength="20"/><br/>

            <input type="submit" name="logar" value="Login"/>
        </form>

    </body>
</html>