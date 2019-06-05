<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos">
	<h1>Escolha o lugar</h1>
            <table>
                <tr>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                    <th>D</th>
                </tr>
            <?php
            foreach ($assentos as $ass) {
                $sql = '
                    <tr>
                      <td>'.$ass->getAssento().'</td>
                      <td>teste</td>
                      <td>teste</td>
                      <td>teste</td>
                    </tr>';
             echo $sql;
            }
            ?>
            </table>
	</div>
</section>

