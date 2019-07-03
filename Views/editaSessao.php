<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos addFilme">
            
        <?php if(isset($status) && $status == 'atualizado'): ?>
            <div class="aviso">Sessão Atualizada com sucesso.</div>
        <?php endif; ?>
        <?php if(isset($status) && !$status == 'atualizado'): ?>
            <div class="aviso">Não foi possível editar a sessão.</div>
        <?php endif; ?>
	<h1>Editar Sessão</h1>
        <form method="POST" >
                <div>
                    <label for="data">Data:</label>
                    <input type="text" name="data" id="data" value="<?php echo $sessao[0]->getDataSessao(); ?>" />
                </div>

                <div>
                    <label for="horario">horario:</label>
                    <input type="text" name="horario" id="horario" value="<?php echo $sessao[0]->getHoraSessao(); ?>"/>
                </div>

                <div>
                    <label for="inteira">Valor Inteira:</label>
                    <input type="text" name="inteira" id="inteira" value="<?php echo $sessao[0]->getValorInteira(); ?>"/>
                </div>
            
                <div>
                    <label for="meia">Valor Meia:</label>
                    <input type="text" name="meia" id="meia" value="<?php echo $sessao[0]->getValorMeia(); ?>"/>
                </div>

                <div>
                    <label for="sessao">Sessão Encerrada:</label>
                    <input type="text" name="sessao" id="sessao" value="<?php echo $sessao[0]->getSessaoEncerrada(); ?>"/>
                </div>
            
                <div>
                    <input type="hidden" name="sala" id="sala" value="<?php echo $sessao[0]->getSala(); ?>"/>
                </div> 
            
                <div>
                    <input type="hidden" name="filme" id="filme" value="<?php echo $sessao[0]->getFilme(); ?>"/>
                </div>             
                <button type="submit" class="btn">Salvar</button>

            </form>
        <a href="<?php echo BASE_URL; ?>" class="btn">Voltar</a>
	</div>
</section>





