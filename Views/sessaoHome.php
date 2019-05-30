<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos">
	<h1>Selecione a Sessão</h1>
            <table>
                <tr>
                    <th>Título</th>
                    <th>Duração</th>
                    <th>Opções</th>
                </tr>
            <?php
            foreach ($sessoes as $s) {
                $sql = '
                    <tr>
                      <td>'.$s->getId().'</td>
                      <td></td>
                      <td><a href="sessao">Comprar Ingresso</a>
                    </tr>';
             echo $sql;
            }
            ?>
            </table>
	</div>
</section>

