<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos">
	<h1>Adicionar Filme</h1>
        <form method="POST" action="<?php echo BASE_URL; ?>filme/inserir">

                <div>
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" id="titulo" />
                </div>

                <div>
                    <label for="duracao">duracao:</label>
                    <input type="text" name="duracao" id="duracao" />
                </div>

                <button type="submit" class="btn">Salvar</button>

            </form>
	</div>
</section>


