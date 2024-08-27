<?php $render('header'); ?>
<section class="error-page">
    <div class="container error-container">
        <h1 class="error-code">404</h1>
        <p class="error-message">Oops! Página não encontrada.</p>
        <p>Desculpe, a página que você está procurando não existe ou foi movida.</p>
        <a href="<?= $base; ?>" class="btn btn-primary home-btn">Voltar para a Página Inicial</a>
    </div>
</section>
<?php $render('footer'); ?>