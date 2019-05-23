<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos addFilme">
            
        <?php if(isset($status) && $status == 'atualizado'): ?>
            <div class="aviso">Filme Atualizado com sucesso.</div>
        <?php endif; ?>
        <?php if(isset($status) && !$status == 'atualizado'): ?>
            <div class="aviso">Filme Atualizado com sucesso.</div>
        <?php endif; ?>
	<h1>Editar Filme</h1>
        <form method="POST" >
                <div>
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" id="titulo" value="<?php echo $filme[0]->getTitulo(); ?>" />
                </div>

                <div>
                    <label for="duracao">duracao:</label>
                    <input type="text" name="duracao" id="duracao" value="<?php echo $filme[0]->getDuracao(); ?>"/>
                </div>

                <button type="submit" class="btn">Salvar</button>

            </form>
        <a href="<?php echo BASE_URL; ?>" class="btn">Voltar</a>
	</div>
</section>





