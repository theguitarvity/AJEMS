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

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>
<body>
    <div class="container">

        <form class="form-signin" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input class="form-control" name="email"type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button name ="btn_log"class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
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
