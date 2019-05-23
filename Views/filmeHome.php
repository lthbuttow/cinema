<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos">
	<h1>Selecione o Filme</h1>
            <table>
                <tr>
                    <th>Título</th>
                    <th>Duração</th>
                    <th>Opções</th>
                </tr>
            <?php 
            foreach ($filmes as $filme) {
                $sql = '
                    <tr>
                      <td>'.$filme->getTitulo().'</td>
                      <td>'.$filme->getDuracao().'</td>
                      <td><a href="filme/ingresso">Comprar Ingresso</a>
                      <a href="filme/editar/'.$filme->getId().'">Editar Filme</a>
                      <a href="filme/excluir/'.$filme->getId().'">Excluir Filme</a></td>
                    </tr>';
             echo $sql;
            }
            ?>
            </table>
	</div>
</section>
