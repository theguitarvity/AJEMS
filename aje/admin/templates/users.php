<?php
require_once("classes/Persistencia/DAO/UsuarioDAO.php");
require_once("classes/Entidades/Usuario.php");
require_once("classes/Entidades/Endereco.php");
require_once("classes/Persistencia/DAO/EnderecoDAO.php");

$dao = new UsuarioDAO();
$endDAO = new EnderecoDAO();
$user = new Usuario();
$end = new Endereco();
?>

<h2 class="sub-header">Lista de Usuários Cadastrados</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Empresa</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <?php
                $query = $pdo->query("SELECT id_usuario,nome,email,empresa FROM usuario");
                while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                <tr>
                    <td><?php echo $linha['id_usuario']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['email']; ?></td>
                    <td><?php echo $linha['empresa']; ?></td>

                </tr>    
                <?php
            }
            ?> 
            </tr>

        </tbody>
    </table>
</div>

<form id="inserirUsuario" method="post" action="#"></form>

<button class="btn btn-success" id="btn_inserirUsuario" name="btn_add" onclick="inserirUsuario()">Inserir Usuário</button>


<script>
    function inserirUsuario() {

        var _html = "<h3>Cadastro de Usuarios</h3>";

        _html += "<input type=\"text\" name=\"nome\" placeholder=\"Nome\" class=\"form-control\" required><br />";
        _html += "<input type=\"text\" name=\"login\" placeholder=\"Login\" class=\"form-control\" required><br />";
        _html += "<select class=\"form-control\" name=\"tipo\" required><option value=\"null\">Tipo de Usuário</option><option value=\"admin\">Administrador</option><option value=\"comum\">Comum</option></select><br/>";
        _html += "<input type=\"password\" name=\"senha\" placeholder=\"Senha\" class=\"form-control\" required><br />";
        _html += "<input type=\"password\" name=\"validador\" placeholder=\"Repita a Senha\" class=\"form-control\" required><br />";
              
        _html += "<button class=\"btn btn-info\" name=\"inserir\">Enviar</button>"
        _html += "&nbsp;&nbsp;&nbsp;<a class=\"btn btn-warning\" href=\"?page=users\">Cancelar</a>"

        document.getElementById("inserirUsuario").innerHTML = _html;

        document.getElementById("btn_inserirUsuario").style.display = "none";
    }
</script>


<!--<h4>Informações de contato</h4>
<input type="text" name="tel" placeholder="Insira o telefone fixo do usuário" class="form-control" style="width: 30%"><br />
<input type="text" name="cel" placeholder="Insira o telefone celular do usuário" class="form-control" style="width: 30%"><br />
<input type="email" name="email" placeholder="Insira o e-mail do usuário" class="form-control" style="width: 30%"><br />

<h4>Informações de correspondência</h4>
<input type="text" name="rua" placeholder="Insira o nome da rua do usuário" class="form-control" style="width: 30%"><br />
<input type="text" name="numero" placeholder="Insira o numero da casa usuário" class="form-control" style="width: 30%"><br />
<input type="text" name="complemento" placeholder="Insira o complemento da casa usuário" class="form-control" style="width:30%"><br />
<input type="text" name="bairro" placeholder="Insira o bairro do usuário" class="form-control" style="width: 30%"><br />
<input type="text" name="cidade" placeholder="Insira a cidade do usuário" class="form-control" style="width: 30%"><br />
<input type="text" name="estado" placeholder="Insira o estado do usuário" class="form-control" style="width: 30%"><br />
<input type="text" name="cep" placeholder="Insira o cep da casa usuário" class="form-control" style="width:30%"><br />

<h4>Informações empresariais</h4>
<input type="text" name="empresa" placeholder="Insira o nome da empresa do usuário" class="form-control" style="width: 30%"><br />

<h4>Informações para acesso</h4>
<input type="text" name="grupo" placeholder="Insira grupo" class="form-control" style="width: 30%"><br />
<input type="password" name="senha" placeholder="Insira a senha" class="form-control" style="width: 30%"><br />
<input type="password" name="conf" placeholder="Confirme a senha" class="form-control" style="width: 30%"><br />
<button class="btn btn-success" name="btn_cad">Cadastrar</button>

</form>;-->



<?php
if (isset($_POST['btn_cad']) && $_POST['senha'] == $_POST['conf']) {
    //setando dados do endereço
    $end->setRuaEndereco($_POST['rua']);
    $end->setNumeroEndereco($_POST['numero']);
    $end->setComplemento($_POST['complemento']);
    $end->setBairroEndereco($_POST['bairro']);
    $end->setCidadeEndereco($_POST['cidade']);
    $end->setEstadoEndereco($_POST['estado']);
    $end->setCepEndereco($_POST['cep']);
    $end->setCpfUser($_POST['cpf']);

    //setando dados do usuario
    $user->setNomeUsuario($_POST['nome']);
    $user->setCpfUsuario($_POST['cpf']);
    $user->setDataNasc($_POST['data']);
    $user->setEmailUsuario($_POST['email']);
    $user->setEmpresaUsuario($_POST['empresa']);
    $user->setIdEndereco($endDAO->retorID($_POST['cpf']));
    $user->setIdGrupo("1");
    $user->setTelCel($_POST['cel']);
    $user->setTelFixo($_POST['tel']);
    $user->setSenha($_POST['senha']);

    if ($endDAO->inserir($end)) {
        if ($dao->inserir($user)) {
            ?>
            <script>
                alert("usuario cadastrado");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("usuario não cadastrado");
            </script>
            <?php
        }
    }
}
?>