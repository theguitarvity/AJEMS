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
                <!--                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Settings</a></li>
                                        <li><a href="#">Profile</a></li>-->
                <li><a href="#">Sair</a></li>
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
                default :
                    echo '<h2>Página não encontrada</h2>';
                    break;
            }
            ?>
        </div>
    </div>
</div>