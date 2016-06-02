<h3>Slide</h3>

<!-- <div id="editSlide"></div> -->


<form id="inserirSlide"></form>

<button class="btn btn-success" id="btn_inserirSlide" name="btn_add" onclick="inserirSlide()">Inserir Slide</button>


<script>
    function inserirSlide() {

        var _html = "<h4>Inserir Slide</h4>";

        _html += "<input type=\"file\" name=\"titulo\" placeholder=\"Título do Slide\" class=\"file-loading\"><br />";
        _html += "<input type=\"text\" name=\"titulo\" placeholder=\"Título do Slide\" class=\"form-control\"><br />";
        _html += "<input type=\"text\" name=\"descricao\" placeholder=\"descricao\" class=\"form-control\"><br />";
        _html += "<input type=\"text\" name=\"link_name\" placeholder=\"Nome do link\" class=\"form-control\"><br />";
        _html += "<input type=\"text\" name=\"link_url\" placeholder=\"Endereço do link\" class=\"form-control\"><br />";

        _html += "<button class=\"btn btn-info\" name=\"inserir\">Enviar</button>"
        _html += "&nbsp;&nbsp;&nbsp;<a class=\"btn btn-warning\" href=\"?page=layout\">Cancelar</a>"

        document.getElementById("inserirSlide").innerHTML = _html;

        document.getElementById("btn_inserirSlide").style.display = "none";
    }
</script>

<h3>Sobre</h3>

<p class="text-warning">Ainda não implementado.</p>

<h3>Eventos</h3>

<p class="text-warning">Ainda não implementado.</p>