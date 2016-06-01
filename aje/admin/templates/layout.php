<h3>Slide</h3>

<div id="editSlide"></div>

<form method="post" action="upload.php">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Descriçao</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- abaixo se encontra a listagem dos transformandos ja cadatrados -->
            <?php
            $i=1;
            while (isset($_POST['btn_add'])) {
                ?>

                <tr id="slide_1">
                    <td><?php echo $i; ?></td>
                    <td>Example headline.</td>
                    <td></td>
                    <td><input type="file" href="#" class="btn btn-info"></input></td>
                    <td><a type="file" href="#" class="btn btn-info"><span class="glyphicon glyphicon-edit" /></a></td>
                    <td><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash" /></a></td>
                </tr> 
                <?php
                break;
            }
            ?>

        </tbody>
    </table>
</form>
<form method="post">
    <p>
        <button class="btn btn-success"  name = "btn_add" onclick="inserirSlide()">Inserir SLide</button>
    </p>
</form>

<script>
    function inserirSlide() {
        document.getElementById("inserirSlide").innerHTML = "O FILHA DA PUTA";
    }
</script>

<form id="inserirSlide"></form>

<h3>Sobre</h3>

<p class="text-warning">Ainda não implementado.</p>

<h3>Eventos</h3>

<p class="text-warning">Ainda não implementado.</p>