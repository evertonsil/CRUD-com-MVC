<?php $render('header'); ?>

<section class="container">
    <h2>Adicionar novo usuário</h2>
    <form method="POST" action="<?php echo $base; ?>/add">
        <div class="mb-3">
            <label for="userNameInput" class="form-label">Nome</label>
            <input type="text" class="form-control" name="userNameInput" id="userNameInput" placeholder="Seu nome" required>
        </div>
        <div class="mb-3">
            <label for="userMailInput" class="form-label">Email</label>
            <input type="email" class="form-control" name="userMailInput" id="userMailInput" placeholder="Seu e-mail" required>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
</section>

<?php $render('footer'); ?>