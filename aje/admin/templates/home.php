
<section class="container-fluid">
    <div class="row">
        <h3 class="page-header" style="text-align:center">Ações diponíveis para o seu perfil</h3>
        
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <i class="glyphicon glyphicon-plus"></i>
                <div class="caption">
                    <h3>Cadastrar Usuários</h3>
                    <p>Aqui você poderá cadastrar os usuários para terem acesso administrativo no site</p>
                    <p><a href="?page=cadastros" class="btn btn-success btn-lg btn-block" role="button">Ir para tela de cadastro</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <i class="info-item img-circle glyphicon glyphicon-plus"></i>
                <div class="caption">
                    <h3>Gerenciar conteúdo do site</h3>
                    <p>Aqui você poderá gerênciar o conteúdo a ser exibido no site, desde slides, sessões e afins.</p>
                    <p><a href="?page=layout" class="btn btn-success btn-lg btn-block" role="button">Ir para tela de gerenciamento</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

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

<!--
   <?php //echo "Seja Bem-Vindo, " . $pri = explode(" ", $nome)[0]; ?>

->