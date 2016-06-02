<?php
session_start();

if ($_SESSION['logado'] != 1) {
    ?>
    <script type="text/javascript">
        document.location.href = "login.php";
    </script>
    <?php
}
?>



<?php
/*
 * LEIA
 * 
 * Esse é a página inicial e única. As outras páginas serão por require. Assim:
 * 
 * Se a página www.example.com/admin/settings for requisitada, na verdade será
 * www.example.com/admin/index.php?pageName=settings
 * 
 * Essa 'mudança' ocorrerá via .htaccess na raiz do site
 * 
 * Na página index.php terá
 * 
 * .
 * .
 * .
 * case 'settings':
 *      require 'templates/settings.php';
 * .
 * .
 * .
 */


$page = @$_GET['page'];

$menu = "menu.php";

$home_page = "home.php";
$layout_page = "templates/layout.php";
$settings_page = "settings.php";
$cadastros_page = "templates/cadastros.php";
?>

<?php
require_once ("classes/Persistencia/DAO/ConnectionFactory.php");
require_once("classes/Persistencia/DAO/UsuarioDAO.php");

$dao = new UsuarioDAO();
$conn = new ConnectionFactory();
$pdo = $conn->Connect();
if (isset($_SESSION['userID'])) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE id_usuario  = :id");
        $param = array(
            ":id" => $_SESSION['userID']
        );
        $stmt->execute($param);
        $linha = $stmt->fetch(PDO::FETCH_ASSOC);
        $nome = $linha['nome'];
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
?>    

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Área de administração AJE-MS</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        
        
        <![endif]-->
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Administração AJE-MS</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><?php echo "Olá, " . $nome; ?></a></li>

                        <li><a href="?acao=sair">Sair</a></li>
                    </ul>
                    <!--                    <form class="navbar-form navbar-right">;
                                            <input type="text" class="form-control" placeholder="Search...">
                                        </form>-->
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
<?php require $menu; ?>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


<?php
switch ($page) {
    case "home" :
        require $home_page;
        break;
    case "layout":
        require $layout_page;
        break;
    case "settings":
        require $settings_page;
        break;
    case "cadastros":
        require $cadastros_page;
        break;
    default :
        echo '<h2>Página não encontrada</h2>';
        break;
}
?>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
<?php
if (isset($_GET["acao"])) {
    if ($_GET["acao"] == "sair") {
        $_SESSION['logado'] = 0;
        ?>
        <script type="text/javascript">
            document.location.href = "login.php";
        </script>
        <?php
    }
}
?>