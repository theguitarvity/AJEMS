<?php
$msg = false;
if (isset($_FILES['arquivo'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "img/slides/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);
    if ($_POST['ordem'] == 1) {
        $queryAux = $pdo->prepare("SElECT*FROM imagem WHERE ordem=1");
        $queryAux->execute();

        if ($queryAux->rowCount() > 0) {
            $defineCount = $pdo->prepare("SELECT * FROM imagem");
            $defineCount->execute();
            $novaOrdem = ($defineCount->rowCount()) + 1;
            $alteraAtual = $pdo->prepare("UPDADE imagem SET ordem=:novaOrdem WHERE ordem = 1");
            $paramAux = array(
                ":novaOrdem" => $novaOrdem
            );
            $alteraAtual->execute($paramAux);
            $query = $pdo->prepare("INSERT INTO imagem(arquivo, data, titulo, descricao,ordem) VALUES(:arquivo, NOW(), :titulo, :descricao,:ordem)");
            $param = array(
                ":arquivo" => $novo_nome,
                ":titulo" => $_POST['titulo'],
                ":descricao" => $_POST['descricao'],
                ":ordem" => $_POST['ordem']
            );
            if ($query->execute($param)) {
                $msg = "arquvio enviado com sucesso.";
            } else {
                $msg = "Falha ao enviar arquivo";
            }
        } else {
            $query = $pdo->prepare("INSERT INTO imagem(arquivo, data, titulo, descricao,ordem) VALUES(:arquivo, NOW(), :titulo, :descricao,:ordem)");
            $param = array(
                ":arquivo" => $novo_nome,
                ":titulo" => $_POST['titulo'],
                ":descricao" => $_POST['descricao'],
                ":ordem" => $_POST['ordem']
            );
            if ($query->execute($param)) {
                $msg = "arquvio enviado com sucesso.";
            } else {
                $msg = "Falha ao enviar arquivo";
            }
        }
    } else {
        $query = $pdo->prepare("INSERT INTO imagem(arquivo, data, titulo, descricao,ordem) VALUES(:arquivo, NOW(), :titulo, :descricao,:ordem)");
        $param = array(
            ":arquivo" => $novo_nome,
            ":titulo" => $_POST['titulo'],
            ":descricao" => $_POST['descricao'],
            ":ordem" => $_POST['ordem']
        );
        if ($query->execute($param)) {
            $msg = "arquvio enviado com sucesso.";
        } else {
            $msg = "Falha ao enviar arquivo";
        }
    }
}



?>




<!-- <div id="editSlide"></div> -->




<section class="container-fluid">
    <div class="row">
        <h3 class="page-header" style="text-align:center">Slides Cadastrados no Site</h3>
        <?php
        $sqlList = $pdo->query("SELECT *FROM imagem");
        while ($linha = $sqlList->fetch(PDO::FETCH_ASSOC)) {
            if(isset($_GET['acao']) && isset($_GET['id'])){
                
                if($_GET['acao']=="excluir"){
                    $slideDAO->delete($_GET['id']); ?>
        <script type="text/javascript">
            document.location.href = "?page=layout";
        </script>
        <?php
                }
            }
            ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="?page=layout&acao=excluir&id=<?php echo $linha['idImagem']; ?>"><i class="glyphicon glyphicon-remove"></i></a>
                    <a href="#"><i class="glyphicon glyphicon-pencil"></i></a>
                    <div class="caption">
                        <img src=<?php echo "img/slides/" . $linha['arquivo']; ?> style="width:60%;height=50%;">
                        <h4>Título: <?php echo $linha['titulo']; ?></h4>
                        <h5>Descrição: <?php echo $linha['descricao']; ?></h5>
                    </div>
                </div>
            </div>
            <?php            
        }
        ?>



    </div>
</section>
<form id="inserirSlide" method="post" enctype="multipart/form-data">

    <button class="btn btn-success" id="btn_inserirSlide" name="btn_add" onclick="inserirSlide()">Inserir Slide</button>
    <script>
        function inserirSlide() {

            var _html = "<h4>Inserir Slide</h4>";

            _html += "<input type=\"file\" required name=\"arquivo\" placeholder=\"Título do Slide\" class=\"file-loading\"><br />";
            _html += "<input type=\"text\" name=\"titulo\" placeholder=\"Título do Slide\" class=\"form-control\"><br />";
            _html += "<input type=\"text\" name=\"descricao\" placeholder=\"descricao\" class=\"form-control\"><br />";
            _html += "<label>Ordem de apresentação</label><br />";
            _html += "<input type=\"number\" name=\"ordem\" style=\"width:10%;\" class=\"form-control\"><br />";



            _html += "<button class=\"btn btn-info\" name=\"inserir\">Enviar</button>"
            _html += "&nbsp;&nbsp;&nbsp;<a class=\"btn btn-warning\" href=\"?page=layout\">Cancelar</a>"

            document.getElementById("inserirSlide").innerHTML = _html;

            document.getElementById("btn_inserirSlide").style.display = "none";
        }
    </script>
    <h4>
        <?php
        if ($msg != false) {
            echo $msg;
        }
        ?>
    </h4>
</form>
<section class="container-fluid">
    <div class="row">
        <h3 class="page-header" style="text-align:center">Informações referentes a AJE-MS</h3>
        <form id="inserirSlide" method="post" enctype="multipart/form-data">

            <button class="btn btn-success" id="btn_inserirInformacao" name="btn_add" onclick="inserirInformacao()">Inserir informação</button>
            <script>
                function inserirInformacao() {
                    /*

                    var _html = "<h4>Inserir Slide</h4>";

                    _html += "<input type=\"file\" required name=\"arquivo\" placeholder=\"Título do Slide\" class=\"file-loading\"><br />";
                    _html += "<input type=\"text\" name=\"titulo\" placeholder=\"Título do Slide\" class=\"form-control\"><br />";
                    _html += "<input type=\"text\" name=\"descricao\" placeholder=\"descricao\" class=\"form-control\"><br />";
                    _html += "<label>Ordem de apresentação</label><br />";
                    _html += "<input type=\"number\" name=\"ordem\" style=\"width:10%;\" class=\"form-control\"><br />";



                    _html += "<button class=\"btn btn-info\" name=\"inserir\">Enviar</button>"
                    _html += "&nbsp;&nbsp;&nbsp;<a class=\"btn btn-warning\" href=\"?page=layout\">Cancelar</a>"

                    document.getElementById("inserirSlide").innerHTML = _html;

                    document.getElementById("btn_inserirSlide").style.display = "none";*/
                }
            </script>
            <h4>
                <?php
                if ($msg != false) {
                    echo $msg;
                }
                ?>
            </h4>
        </form>



    </div>
</section>
<section class="container-fluid">
    <div class="row">
        <h3 class="page-header" style="text-align:center">Cadastramento de Eventos no Site</h3>
        <p>Nenhum evento cadastrado!</p>



    </div>
</section>