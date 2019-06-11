<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos">
	<h1>Escolha o lugar</h1>
            <table>
                <tr>
                    <th>Lugares</th>
                    <th>Ações</th>
                </tr>
            <?php
            foreach ($assentos as $ass) {
                $sql = '
                    <tr>
                      <td>'.$ass->getAssento().'</td>
                      <td><a href="http://localhost/cinema/ingresso/reservar/'.$ass->getAssento().'">Reservar</a>  
                    </tr>';
             echo $sql;
            }
            ?>
            </table>
	</div>
</section>

