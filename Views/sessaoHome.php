<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos">
	<h1>Selecione a Sessão</h1>
            <table>
                <tr>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Valor Inteiro</th>
                    <th>Valor Meia</th>
                    <th>Opções</th>
                </tr>
            <?php
            foreach ($sessoes as $s) {
                $sql = '
                    <tr>
                      <td>'.$s->getDataSessao().'</td>
                      <td>'.$s->getHoraSessao().'</td>
                      <td>'.$s->getValorInteira().'</td>
                      <td>'.$s->getValorMeia().'</td>
                      <td><a href="http://localhost/cinema/sessao/consultaSala/'.$s->getId().'">Escolher Lugar</a>
                    </tr>';
             echo $sql;
            }
            ?>
            </table>
	</div>
</section>

