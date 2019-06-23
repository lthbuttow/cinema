<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos">
	<h1>Adicionar Sessão</h1>
        <p>Agora escolha uma sala.</p>
            <table>
                <tr>
                    <th>Número</th>
                    <th>Capacidade</th>
                    <th>Opções</th>
                </tr>
            <?php
            foreach ($salas as $s) {
                $sql = '
                    <tr>
                      <td>'.$s->getNumeroSala().'</td>
                      <td>'.$s->getCapacidadeSala().'</td>
                      <td><a href="http://localhost/cinema/sessao/add/'.$s->getNumeroSala().'/'.$filmeid.'">Selecionar esta sala</a>
                    </tr>';
             echo $sql;
            }
            ?>
            </table>
	</div>
</section>

