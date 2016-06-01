<?php
session_start();
require_once("./classes/Persistencia/DAO/UsuarioDAO.php");
$dao = new UsuarioDAO();
if (isset($_SESSION['logado'])) {
    if ($_SESSION['logado'] == 1) {
        ?>
        <script type="text/javascript">
            document.location.href = "dashboard.php";
        </script>
        <?php
    }
}
?>





<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Administração AJE-MS</title>    

        <link rel="stylesheet" href="../assets/css/AJE-MS-theme.css">
        <link rel="stylesheet" href="../assets/css/AJE-MS-theme.min.css">
        <link rel="stylesheet" href="../assets/css/AJE-MS.css">
        <link rel="stylesheet" href="../assets/css/AJE-MS.min.css">
        <link rel="stylesheet" href="../assets/css/theme.css">

        <script src="assets/js/AJE-MS.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!--<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>-->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


    </head>
    <body>
        <div class="container">

            <form class="form-signin" method="post">
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input class="form-control" style="width: 30%;" name="email"type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input style="width: 30%;" name="senha"type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button name ="btn_log"class="btn btn-lg btn-primary btn-block" type="submit" style="width: 10%">Entrar</button>
            </form>

        </div>
    </body>
</html>
<?php
if (isset($_POST['btn_log'])) {
    if ($dao->login($_POST['email'], $_POST['senha'])) {
        $_SESSION['logado'] = 1;
        $_SESSION['userID'] = $dao->retornaID($_POST['email']);
        ?>
        <script>
            document.location.href = "dashboard.php?page=home";
        </script>
        <?php
    } else {
        ?>
        <script>alert("E-mail e/ou senha incorretos");
        </script>
        <?php
    }
}
?>
