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
<h3>Cadastro de Usuarios</h3>

 <form method="post" class="form-cadastro">
    <h4>Informações pessoais</h4>

    <input type="text" name="nome" placeholder="Insira o nome do usuário" class="form-control" style="width: 30%"><br />
    <input type="text" name="cpf" placeholder="Insira o CPF do usuário" class="form-control" style="width: 30%"><br />
    <input type="date" name="data" placeholder="Insira a data de nascimento do usuário" class="form-control" style="width: 30%"><br />

    <h4>Informações de contato</h4>
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

</form>



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
        }
        else{
            ?>
            <script>
                alert("usuario não cadastrado");
            </script>
            <?php
        }
    }
}
?>