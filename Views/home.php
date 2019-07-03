<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos">
	<h1>Adicionar Filme</h1>
                    
        <?php if(isset($sessaoDeletada) && $sessaoDeletada == 'sucesso'): ?>
            <div class="aviso">Sessão excluída com sucesso.</div>
        <?php endif; ?>
        <?php if(isset($sessaoDeletada) && !$sessaoDeletada == 'atualizado'): ?>
            <div class="aviso">Não foi possível excluir a sessão.</div>
        <?php endif; ?>

        <a href="<?php echo BASE_URL; ?>filme/inserir" class="btn">Adicionar Filme</a>
        <a href="<?php echo BASE_URL; ?>sessao/selecionarFilme" class="btn">Adicionar Sessão</a>
        <a href="<?php echo BASE_URL; ?>filme" class="btn">Filmes Disponíveis</a>
	</div>
</section>


