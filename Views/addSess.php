<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos">
        <?php if(isset($status) && $status == 'inserido'): ?>
            <div class="aviso">Sessão Inserida com sucesso.</div>
        <?php endif; ?>            
	<h1>Adicionar Sessão</h1>
        <p>Preencha as informações da sessão.</p>
    
        <form method="POST">            
            
            <div>
                <label for="data">Data:</label>
                <input type="text" name="data" id="data" />
            </div>

            <div>
                <label for="horario">Horario:</label>
                <input type="text" name="horario" id="horario" />
            </div>
         
            <div>
                <label for="inteira">Valor Inteira:</label>
                <input type="text" name="inteira" id="inteira" />
            </div>
            
            <div>
                <label for="meia">Valor Meia:</label>
                <input type="text" name="meia" id="meia" />
            </div>

            <div>
                <label for="sessao">Sessão Encerrada:</label>
                <input type="text" name="sessao" id="sessao" />
            </div>            

            <button type="submit" class="btn">Salvar</button>
        </form>

	</div>
</section>

