<?php
//chamando um arquivo partial, indicando o nome do view.
$render('header');
?>
<section class="container">
    <h2>Lista de Usuários</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <th><?= $user['id']; ?></th>
                    <th><?= $user['name']; ?></th>
                    <th><?= $user['email']; ?></th>
                    <th>
                        <a href="<?= $base; ?>/user/edit/<?= $user['id']; ?>">
                            <button class="btn btn-primary btn-sm">Editar</button>
                        </a>
                        <a href="<?= $base; ?>/user/delete/<?= $user['id']; ?>">
                            <button href="" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                        </a>
                    </th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <a href="<?php echo $base; ?>/add">
            <button class="btn btn-success">Adicionar Usuário</button>
        </a>
    </div>
</section>
<?php $render('footer'); ?>