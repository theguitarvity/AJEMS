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
            $i = 1;
            while (isset($_POST['btn_add'])) {
                ?>

                <tr id="slide_1">
                    <td><?php echo $i; ?></td>
                    <td>Example headline.</td>
                    <td></td>
            <label class="control-label">Select File</label>
            <td><input id="input-1" type="file" class="file"></td>
            <td><a type="file" href="#" class="btn btn-info"><span class="glyphicon glyphicon-edit" /></a></td>
            <td><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash" /></a></td>
            <td><input type="submit" class="btn btn-success"  value="cadastrar"name = "btn_cad"></td>
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
        <label class="control-label">Planets and Satellites</label>
        <input id="input-24" name="input24[]" type="file" multiple class="file-loading">
        <script>
            $(document).on('ready', function () {
                $("#input-24").fileinput({
                    initialPreview: [
                        'http://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/FullMoon2010.jpg/631px-FullMoon2010.jpg',
                        'http://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Earth_Eastern_Hemisphere.jpg/600px-Earth_Eastern_Hemisphere.jpg'
                    ],
                    initialPreviewAsData: true,
                    initialPreviewConfig: [
                        {caption: "Moon.jpg", size: 930321, width: "120px", key: 1},
                        {caption: "Earth.jpg", size: 1218822, width: "120px", key: 2}
                    ],
                    deleteUrl: "/site/file-delete",
                    overwriteInitial: false,
                    maxFileSize: 100,
                    initialCaption: "The Moon and the Earth"
                });
            });
        </script>
    </p>
</form>

<script>
    function inserirSlide() {
        document.getElementById("inserirSlide").innerHTML += "TESTE Executado";
    }
</script>

<form id="inserirSlide"></form>

<h3>Sobre</h3>

<p class="text-warning">Ainda não implementado.</p>

<h3>Eventos</h3>

<p class="text-warning">Ainda não implementado.</p>