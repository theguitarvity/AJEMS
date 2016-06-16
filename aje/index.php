<?php
include_once("admin/classes/Persistencia/DAO/ConnectionFactory.php");
$conn = new ConnectionFactory();
$pdo = $conn->Connect();
?>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>AJE-MS — Associação dos Jovens Empreendedores</title>    

        <link rel="stylesheet" href="assets/css/AJE-MS-theme.min.css">
        <link rel="stylesheet" href="assets/css/AJE-MS.min.css">
        <link rel="stylesheet" href="assets/css/theme.css">

        <script src="assets/js/AJE-MS.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!--<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>-->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


        <script type="text/javascript">// <![CDATA[
            $(document).ready(function () {
                function filterPath(string) {
                    return string.replace(/^\//, '').replace(/(index|default).[a-zA-Z]{3,4}$/, '').replace(/\/$/, '');
                }
                $('a.menu-link').each(function () {
                    if (filterPath(location.pathname) == filterPath(this.pathname) && location.hostname == this.hostname && this.hash.replace(/#/, '')) {
                        var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) + ']');
                        var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
                        if ($target) {
                            var targetOffset = $target.offset().top - 170;
                            $(this).click(function () {
                                $('html, body').animate({scrollTop: targetOffset}, 900);
                                return false;
                            });
                        }
                    }
                });
            }); // ]]>
            $(document).on('ready', function () {
                var winHeight = $(window).height(),
                        docHeight = $(document).height(),
                        progressBar = $('progress'),
                        max, value;
                /* Set the max scrollable area */
                max = docHeight - winHeight;
                progressBar.attr('max', max);
                $(document).on('scroll', function () {
                    value = $(window).scrollTop();
                    progressBar.attr('value', value);
                    if (value > 0) {
                        $("#to-top").show("slow");
                    } else {
                        $("#to-top").hide("slow");
                    }
                    if (value > 33) {
                        $("#header").addClass("navbar-fixed-top");
                    } else {
                        $("#header").removeClass("navbar-fixed-top");
                    }
                });
            });
        </script>




    </head>

    <body>
        <div id="nav-top-section">
            <nav id="nav-top" class="container">
                <ul class="nav nav-pills navbar-right">
                    <!--                <li><a href="#">área restrita</a></li>
                                    <li id="filia-se"><a href="#">filia-se</a></li>-->
                    <li><a href="#"><i class="fa fa-facebook" style="font-size: 1.5em;" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" style="font-size: 1.5em;" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square" style="font-size: 1.5em;" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </div>

        <header id="header">   
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="img-responsive" /></a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                        
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="menu-link" href="#infos">sobre</a></li>
                            <li><a class="menu-link" href="#eventos">eventos</a></li>
                            <li><a class="menu-link" href="#localizacao">localização</a></li>
                            <li><a class="menu-link" href="#associados">associados</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </header>  

        <div id="to-top"><a href="#nav-top" class="menu-link"><span class="fa fa-chevron-up" style="font-size: 2em"/></a></div>


        <!-- SLIDE---------------------------------------------------------------------->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
                $query = $pdo->query("SELECT * FROM imagem WHERE ordem=1");
                $linhaOrdem1 = $query->fetch(PDO::FETCH_ASSOC);
                if ($query->rowCount() > 0) {
                ?>

                <div class="item active">
                    <img class="first-slide" alt="First slide" src=<?php echo "admin/img/slides/" . $linhaOrdem1['arquivo']; ?> >
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><?php echo $linhaOrdem1['titulo']; ?></h1>
                            <p><?php echo $linhaOrdem1['descricao']; ?></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>

                <?php
                $queryRes = $pdo->query("SELECT * FROM imagem");


                while ($linhaRes = $queryRes->fetch(PDO::FETCH_ASSOC)) {
                ?>

                <div class="item">
                    <img class="first-slide" alt="First slide" src=<?php echo "admin/img/slides/" . $linhaRes['arquivo']; ?> >
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><?php echo $linhaRes['titulo']; ?></h1>
                            <p><?php echo $linhaRes['descricao']; ?></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>

                <?php
                }
                
                ?>



            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- /.SLIDE -->


        <section class="container">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">WORKCHOPP.<span class="text-muted"> O tradicional hapy hour da Associação dos Jovens Empreendedores e Empresários de Mato Grosso do Sul, e agora em dose dupla!!!</span></h2><br/>
                    <p class="lead">No próximo dia 17/05/2016, iremos receber a Youtuber, Blogueira, Designer de Moda, Publicitária e Maquiadora Profissional, <i>Lívia Tosta</i>, proprietária da “Boutique de Beaute”, e <i>Renan Reggiani</i>, o biólogo que resolveu virar barbeiro, e montou com mais um amigo, a “Hard Word Tatto And Barbershop”, pioneira no ramo de tatuagem e barbearia em Campo Grande (MS).</p> 

                    <p class="lead">Venha conosco conhecer a trajetória destes dois jovens empreendedores, e um pouco mais de dois dos segmentos em grande expansão, mesmo em época de crise. </p>

                    <!--<p class="lead">Evento Gratuito e com Emissão de Certificado de Horas. #ajems #workchoppajems #empreendedorismo #jovensempreendedores</p>-->

                    <p class="lead"><a href="#" class="btn btn-lg btn-primary disabled">Inscreva-se</a></p>
                </div>
                <div class="col-md-5">                    
                    <!--data-src="holder.js/400x400/auto"-->
                    <img id="workchopp-img" width="100%" class="img-thumbnail featurette-image img-responsive center-block" src="https://scontent-lga3-1.xx.fbcdn.net/v/t1.0-9/13179204_1033086236757977_4456101136849385387_n.jpg?oh=7cede92111c7b2bf919d78602714e7c3&oe=57E6650D" srcalt="Generic placeholder image">
                </div>
            </div>
        </section>


        <!-- INFOS
        ----------------------------------------------------------------------->
        <section id="infos">
            <div>
                <div class="container">
                    <div class="col-md-3">
                        <span class="info-item img-circle glyphicon glyphicon-book"></span>
                        <h4 class="h3">O que é a AJE-MS?</h4>
                        <p>É uma entidade classista, sem fins lucrativos, que possui como objetivos o fomento e a difusão da cultura empreendedora e a formação de novas lideranças que visem a representação do jovem empreendedor.</p>
                    </div>
                    <div class="col-md-3">
                        <span class="info-item img-circle glyphicon glyphicon-map-marker"></span>
                        <h4 class="h3">Qual o nosso objetivo ?</h4>
                        <p>Contribuir com a formação de novas lideranças no meio empresarial, através de eventos voltados ao desenvolvimento dos nossos associados, e disseminar a cultura empreendedora ao público em geral. </p>
                    </div>
                    <div class="col-md-3">
                        <span class="info-item img-circle glyphicon glyphicon-bullhorn"></span>
                        <h4 class="h3">O que fazemos ?</h4>
                        <p>Realizamos eventos e promovemos missões empresariais e cursos que congregam nossos associados, voltados a contribuir para a sua formação como líderes, além de promovermos ações de cunho social. </p>
                    </div>
                    <div class="col-md-3">
                        <span class="info-item img-circle fa fa-users" style="font-size: 60px"></span>
                        <h4 class="h3">Como associar-se ?</h4>
                        <p>Preencha o formulário e efetue o pagamento da sua taxa de associação. Direcionado aos jovens empreendedores ou intra-empreendedores, empresários ou universitário inspirados pela desejo de transformação e de conexão ao ambiente empreendedor. </p>
                    </div>
                </div>
            </div>
        </section>  <!-- /INFOS -->   


        <section id="eventos" class="container">
            <div class="row">
                <h3 class="h1" style="text-align:center">Eventos</h3>
                <hr/>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://www.quiosquechoppbrahma.com.br/skins/default/default/images/indexLogo.png" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula vehicula enim, at lacinia arcu maximus at. Donec vulputate leo ac urna auctor, a finibus ligula ultricies</p>
                            <p><a href="#" class="btn btn-success btn-lg btn-block" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://www.quiosquechoppbrahma.com.br/skins/default/default/images/indexLogo.png" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula vehicula enim, at lacinia arcu maximus at. Donec vulputate leo ac urna auctor, a finibus ligula ultricies</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                               role="button">Button</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://www.quiosquechoppbrahma.com.br/skins/default/default/images/indexLogo.png" alt="...">
                        <div class="caption">
                            <h3>Thumbnail label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula vehicula enim, at lacinia arcu maximus at. Donec vulputate leo ac urna auctor, a finibus ligula ultricies</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default"
                                                                                               role="button">Button</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <section id="localizacao">
            <h3 class="h1" style="text-align:center">Localização</h3>
            <hr/>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.180679114289!2d-54.58467538532971!3d-20.45777096021955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e8c1fbc3cd79%3A0x843af4f256a18cec!2sAv.+Afonso+Pena%2C+5723+-+Ch%C3%A1cara+Cachoeira%2C+Campo+Grande+-+MS%2C+79021-435!5e0!3m2!1spt-BR!2sbr!4v1464199265554"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section> 


        <section id="associados" class="container">
            <h3 class="h1" style="text-align:center">Associados</h3>
            <hr/>

            <center>
                <div class="row">
                    <div class="col-md-2">
                        <h3>Empresa a</h3>
                        <img src="assets/img/associados/2.png"  class="img-responsive img-thumbnail" alt="Responsive image img-thumbnail">
                    </div>
                    <div class="col-md-2">
                        <h3>Empresa b</h3>
                        <img src="assets/img/associados/3.png"  class="img-responsive img-thumbnail" alt="Responsive image img-thumbnail">
                    </div>
                    <div class="col-md-2">
                        <h3>Empresa c</h3>
                        <img src="assets/img/associados/6.png"  class="img-responsive img-thumbnail" alt="Responsive image img-thumbnail">
                    </div>
                    <div class="col-md-2">
                        <h3>Empresa d</h3>
                        <img src="assets/img/associados/aeacg.png"  class="img-responsive img-thumbnail" alt="Responsive image img-thumbnail">
                    </div>
                    <div class="col-md-2">
                        <h3>Empresa e</h3>
                        <img src="assets/img/associados/agpms.png"  class="img-responsive img-thumbnail" alt="Responsive image img-thumbnail">
                    </div>
                    <div class="col-md-2">
                        <h3>Empresa f</h3>
                        <img src="assets/img/associados/crajr.png"  class="img-responsive img-thumbnail" alt="Responsive image img-thumbnail">
                    </div>
                </div>
                <br/>
                <div class="col-md-12">
                    <p class="lead"><a class="btn btn-lg btn-success disabled" href="#">Veja mais</a></p>
                </div>

            </center>

        </section>

        <hr/>

        <section id="associados" class="container">
            <h3 class="h1" style="text-align:center">Diretoria</h3>
            <hr/>

            <center> 
                <div class="row">
                    <div class="col-md-2">
                        <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/p160x160/10846018_817795644943416_1315452325231480922_n.jpg?oh=895a74a2f937fd57353ca6b7c32be305&oe=57D44A27&__gda__=1476613708_9ec1754df3264ed4bfc2d148931330d9"  class="img-responsive img-circle" alt="Responsive image">
                        <h3>Diego Antonio<h3>
                                </div>
                                <div class="col-md-2">
                                    <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/p160x160/10846018_817795644943416_1315452325231480922_n.jpg?oh=895a74a2f937fd57353ca6b7c32be305&oe=57D44A27&__gda__=1476613708_9ec1754df3264ed4bfc2d148931330d9"  class="img-responsive img-circle" alt="Responsive image">
                                    <h3>Diego Antonio<h3>
                                            </div>
                                            <div class="col-md-2">
                                                <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/p160x160/10846018_817795644943416_1315452325231480922_n.jpg?oh=895a74a2f937fd57353ca6b7c32be305&oe=57D44A27&__gda__=1476613708_9ec1754df3264ed4bfc2d148931330d9"  class="img-responsive img-circle" alt="Responsive image">
                                                <h3>Diego Antonio<h3>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/p160x160/10846018_817795644943416_1315452325231480922_n.jpg?oh=895a74a2f937fd57353ca6b7c32be305&oe=57D44A27&__gda__=1476613708_9ec1754df3264ed4bfc2d148931330d9"  class="img-responsive img-circle" alt="Responsive image">
                                                            <h3>Diego Antonio<h3>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/p160x160/10846018_817795644943416_1315452325231480922_n.jpg?oh=895a74a2f937fd57353ca6b7c32be305&oe=57D44A27&__gda__=1476613708_9ec1754df3264ed4bfc2d148931330d9"  class="img-responsive img-circle" alt="Responsive image">
                                                                        <h3>Diego Antonio<h3>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/p160x160/10846018_817795644943416_1315452325231480922_n.jpg?oh=895a74a2f937fd57353ca6b7c32be305&oe=57D44A27&__gda__=1476613708_9ec1754df3264ed4bfc2d148931330d9"  class="img-responsive img-circle" alt="Responsive image">
                                                                                    <h3>Diego Antonio<h3>
                                                                                            </div>
                                                                                            </div>
                                                                                            <br/>
                                                                                            <div class="col-md-12">
                                                                                                <p class="lead"><a class="btn btn-lg btn-success disabled" href="#">Veja mais</a></p>
                                                                                            </div>

                                                                                            </center>

                                                                                            </section>

                                                                                            <hr/>

                                                                                            <section id="newsletter">
                                                                                                <div class="container">
                                                                                                    <h3 class="h1" style="text-align:center">Assine nosso newsletter</h3>
                                                                                                    <hr />
                                                                                                    <form class="form-horizontal">
                                                                                                        <div class="form-group">

                                                                                                            <div class="col-md-offset-2 col-sm-6">
                                                                                                                <input type="email" class="form-control" id="inputEmail3" placeholder="joaodasilva@mailbox.com">
                                                                                                            </div>
                                                                                                            <div for="inputEmail3" class="col-sm-2">
                                                                                                                <button style="width: 100%" type="submit" class="btn btn-success">Enviar</button>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>

                                                                                                </div>
                                                                                            </section>



                                                                                            <footer class="container-fluid">

                                                                                                <script>
                                                                                                    // Primeiro ano da AJE-MS
                                                                                                    var s_year = 2011;
                                                                                                    // Ano atual        
                                                                                                    var a_year = new Date().getYear() + 1900;
                                                                                                    var years = (s_year == a_year) ? s_year : s_year + " &mdash; " + a_year;
                                                                                                </script>

                                                                                                <div class="container">
                                                                                                    <div class="col-md-4">
                                                                                                        <h3>Facebook</h3>
                                                                                                        <div class="fb-page" data-href="https://www.facebook.com/aje.matogrossodosul" data-tabs="eventos" data-small-header="false"
                                                                                                             data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                                                                                            <div class="fb-xfbml-parse-ignore">
                                                                                                                <blockquote cite="https://www.facebook.com/aje.matogrossodosul"><a href="https://www.facebook.com/aje.matogrossodosul">Aje-MS</a></blockquote>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div> <!-- / facebook widget -->

                                                                                                    <div class="col-md-4">
                                                                                                        <h3>Contatos</h3>
                                                                                                        <p><i class="fa fa-map-marker"></i> Av. Afonso Pena, 5723 &mdash; Sala 1504 &mdash; CEP 79.031-010</p>
                                                                                                        <p><i class="glyphicon glyphicon-phone-alt"></i> +55 (67) 3201.2137</p>
                                                                                                        <p><i class="glyphicon glyphicon-phone"></i> +55 (67) 992.949.351</p>
                                                                                                    </div>

                                                                                                    <div class="col-md-4">
                                                                                                        <h3>Redes Sociais</h3>
                                                                                                        <p><i class="fa fa-envelope"></i> example@example.com</p>
                                                                                                        <p><i class="fa fa-facebook"></i>/aje.matogrossodosul</p>
                                                                                                        <p><i class="fa fa-instagram"></i>/aje.matogrossodosul</p>
                                                                                                        <p><i class="fa fa-linkedin"></i>/aje.matogrossodosul</p>
                                                                                                    </div>

                                                                                                </div>
                                                                                                <br />
                                                                                                <br />
                                                                                                <div class="container">
                                                                                                    <div class="col-md-6">
                                                                                                        <p>Copyright &copy;
                                                                                                            <script>
                                                                                                                document.write(years);
                                                                                                            </script> Associação dos Jovens Empreendedores.</p>
                                                                                                    </div>
                                                                                                    <div class="col-md-6">
                                                                                                        <p class="text-right">Desenvolvido com &hearts; por <a href="http://bytegod.com.br"><img width="25px" src="assets/img/bg.png" /> ByteGod IT Solutions</a>.</p>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </footer>



                                                                                            <div id="fb-root"></div>
                                                                                            <script>(function (d, s, id) {
                                                                                                    var js, fjs = d.getElementsByTagName(s)[0];
                                                                                                    if (d.getElementById(id))
                                                                                                        return;
                                                                                                    js = d.createElement(s);
                                                                                                    js.id = id;
                                                                                                    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=1432431656988526";
                                                                                                    fjs.parentNode.insertBefore(js, fjs);
                                                                                                }(document, 'script', 'facebook-jssdk'));</script>



                                                                                            <script>
                                                                                                window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
                                                                                            </script>
                                                                                            <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
                                                                                            <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
                                                                                            <script src="http://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
                                                                                            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                                                                                            <script src="http://getbootstrap.com/assets/js/ie10-viconfiewport-bug-workaround.js"></script>

                                                                                            <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
                                                                                            </body>

                                                                                            </html>