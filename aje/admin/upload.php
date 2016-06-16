<?php

/**
 * Description of upload
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
require_once("classes/Persistencia/DAO/ConnectionFactory.php");
require_once("classes/Persistencia/DAO/SlideDAO.php");
require_once("classes/Entidades/Slide.php");
$conn = new ConnectionFactory();
$pdo = $conn->Connect();
$dao = new SlideDAO();
$slide = new Slide();

$numero = $dao->retornaNumero();



if (isset($_FILES['arquivo'])) {
    $extencao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = "slide" . "_" . $numero . "_" . $extencao;
    $diretorio = "img/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);
    $caminho = $diretorio . $novo_nome;

    //setando a slide
    $slide->setNome_slide($novo_nome);
    $slide->setCaminho_slide($caminho);
    echo $numero;
    try {
        if ($dao->insert($slide)) {
        ?>
        <script>
            alert("Enviado");
        </script>
        <?php

    } else {
        ?>
        <script>
            alert("Enviado");
        </script>
        <?php

    }
        
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    
}
?>