<?php $render('header'); ?>

<section class="container">
    <h2>Editar Usuário</h2>
    <form method="POST" action="<?php echo $base; ?>/user/edit/<?= $userData['id']; ?>">
        <div class="mb-3">
            <label for="userNameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" name="userNameInput" id="userNameInput" placeholder="Seu nome" value="<?= $userData['name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="userMailInput" class="form-label">Email</label>
            <input type="email" class="form-control" name="userMailInput" id="userMailInput" placeholder="Seu e-mail" value="<?= $userData['email']; ?>" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Atualizar</button>
        </div>
    </form>
</section>

<?php $render('footer'); ?>