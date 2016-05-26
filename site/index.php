<html lang="pt-br">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
        crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/theme.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <!--<link href="http://getbootstrap.com/examples/carousel/carousel.css" rel="stylesheet">-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
    <nav id="nav-top" class="container-fluid">
        <ul class="nav nav-pills navbar-right">
            <li><a href="#">área restrita</a></li>
            <li id="filia-se"><a href="#">filia-se</a></li>
            <li><a href="#"><i class="fa fa-facebook" style="font-size: 1.5em;" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" style="font-size: 1.5em;" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square" style="font-size: 1.5em;" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
    
    <header class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <img src="assets/img/logo.png" />
            </div>

            <div class="col-md-9">
                <nav>
                    <ul class="nav nav-pills navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">sobre</a></li>
                        <li><a href="#">parceiros</a></li>
                        <li><a href="#">serviços</a></li>
                    </ul>
                </nav>
            </div>
        </div>        
    </header>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            
            
            
            <?php
            
            /**
            * CARREGAR AS IMAGENS DO SLIDE NO BANCO DE DADOS 
            */
                     
            
            ?>
            <div class="item active">
                <img class="first-slide" src="" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php echo "llss" ?></h1>
                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon
                            buttons on the left and right might not load/display properly due to web browser security rules.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>          
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
    <!-- /.carousel -->


    <section class="container-fluid">
        <div class="row">
            <h3 class="h1" style="text-align:center">Eventos</h3>
            <hr/>
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
  
    
    <section id="associados" class="container-fluid">
        <h3 class="h1" style="text-align:center">Alguns Associados</h3>
        <hr/>
        <div class="row">
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-1">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
        </div>
        
        <br />
        
        <div class="row">
            <div class="col-md-2">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-2">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-2">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-2">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-2">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-2">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
        </div>
        
        <br />
        
        <div class="row">
            <div class="col-md-3">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-3">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-3">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-3">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
        </div>
        
        <br />
        
        <div class="row">
            <div class="col-md-4">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-4">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
            <div class="col-md-4">
                <img src="assets/img/logo.png"  class="img-responsive" alt="Responsive image img-thumbnail">
            </div>
        </div>
    </section>
    
 
    <section>
        <h3 class="h1" style="text-align:center">Localização</h3>
        <hr/>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.180679114289!2d-54.58467538532971!3d-20.45777096021955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e8c1fbc3cd79%3A0x843af4f256a18cec!2sAv.+Afonso+Pena%2C+5723+-+Ch%C3%A1cara+Cachoeira%2C+Campo+Grande+-+MS%2C+79021-435!5e0!3m2!1spt-BR!2sbr!4v1464199265554"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

 <section id="newsletter">

        <h3 class="h1" style="text-align:center">Assine nosso newsletter</h3>
        <hr />
        <form class="form-inline">
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                <input width="100%" type="email" class="form-control" placeholder="Email">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>

    </section>



    <footer class="container-fluid">
        <!--<p class="text-center">&copy; 2017 ByteGod IT Solutions</p>
        <p class="text-center">Av. Afonso Pena, 5723 Sala 1504 | Evolution Business Center | Royal Park CEP 79 031-010 |Telefone 67 3201 2137| Cel
            67 9294 9351</p>-->
            
           <!--<div class="row">
               <div class="col-md-4">
                   <h4>Sobre</h4>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada lacus a ligula sodales, id porttitor turpis iaculis. Sed pellentesque maximus nisl.</p>
               </div>
               <div class="col-md-4">
                   <h4>Contato</h4>
                   <div class="Contact-Footer">
                        <ul style="list-style:none">                            
                            <li><i class="fa fa fa-map-marker"></i> Rua Sem Nome, 321</li>        
                            <li><i class="fa fa fa-phone"></i> +55 (67) 8181-3454</li>        
                            <li><i class="fa fa fa-envelope"></i> contato@agpms.com.br</li>
                        </ul>
                    </div>
               </div>
               <div class="col-md-4"></div>
            </div> -->
            
           <div class="row">
               <p class="text-center">&copy; 2016 <img width="25px" src="http://bytegod.com.br/img/bg.png" /> ByteGod IT Solutions.</p>
               <p class="text-center"><i class="fa fa fa-map-marker"></i> Av. Afonso Pena, 5723 &mdash; Sala 1504 &mdash; CEP 79.031-010 <i class="fa fa fa-phone"></i> +55 (67) 3201.2137 | +55 (67) 9294.9351</p>
            </div>       
        
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="http://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>


</body>

</html>