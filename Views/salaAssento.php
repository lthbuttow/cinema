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
                      <td>
                        <form method="POST" action="http://localhost/cinema/ingresso/reservarIngresso" >
                            <div>
                                <input type="hidden" name="assentoId" id="assentoId" value="'.$ass->getassento().'" />
                            </div>

                            <div>
                                <input type="hidden" name="sessaoId" id="sessaoId" value="'.$ass->getSessaoSala().'"/>
                            </div>
                            
                            <div>
                                <input type="checkbox" name="ticketType" value="0" checked>Entrada<br>
                                <input type="checkbox" name="ticketType" value="1">Meia entrada<br>
                            </div>
                            <button type="submit">Reservar</button>

                        </form>
                      </td>
                    </tr>';
             echo $sql;
            }
            ?>
            </table>
	</div>
</section>


<!--<a href="http://localhost/cinema/ingresso/reservar/'.$ass->getAssento().'/'.$ass->getSessaoSala().'">Reservar</a>-->