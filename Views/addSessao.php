<section class="home-intro" id="slider">
	<div class="container home-info">
	</div>
</section>
<section class="container">
	<div class="ingressos">
	<h1>Adicionar Sessão</h1>
        <p>Selecione o filme que você deseja adicionar uma sessão.</p>
            <table>
                <tr>
                    <th>Título</th>
                    <th>Duração</th>
                    <th>Opções</th>
                </tr>
            <?php
            foreach ($filmes as $f) {
                $sql = '
                    <tr>
                      <td>'.$f->getTitulo().'</td>
                      <td>'.$f->getDuracao().'</td>
                      <td><a href="http://localhost/cinema/sessao/selecionarSala/'.$f->getId().'">Selecionar este</a>
                    </tr>';
             echo $sql;
            }
            ?>
            </table>
	</div>
</section>

