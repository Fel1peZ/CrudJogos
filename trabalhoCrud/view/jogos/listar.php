<?php
    require_once(__DIR__ . "/../../controller/JogoController.php");   

    //Chamar o controller para obter a lista de jogos
    $jogosCont = new JogoController();
    $lista = $jogosCont->listar();

    //print_r($lista);


    //Incluir o header
    include_once(__DIR__ . "/../include/header.php");
?>

<h3>Listagem de Jogos</h3> 

<div>
    <a href="inserir.php">Inserir</a>
</div>

<table class="table table-striped">
    <!-- Cabeçalho -->
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Genero</th>
        <th>Data de lançamento</th>
        <th>Console</th>
        <th>Diretor</th>
        <th>Img</th>
    </tr>

    <!-- Dados -->
    <?php foreach($lista as $jogos): ?>
        <tr>
            <td><?= $jogos->getId() ?></td>
            <td><?= $jogos->getTitulo() ?></td>
            <td><?= $jogos->getGenero() ?></td>
            <td><?= $jogos->getDataLancamento() ?></td>
            <td><?= $jogos->getConsole() ?></td>
            <td><?= $jogos->getDiretor() ?></td>
            <td><?= $jogos->getImg() ?></td>
            <td>
                <a href="alterar.php?id=<?= $jogos->getId()?>">
                    <img src="../../img/btn_editar.png" alt="">
                </a>
            </td>
            <td>
                <a href="excluir.php?id=<?= $jogos->getId()?>" onclick="confirm('Confirma a exclusão')">
                    <img src="../../img/btn_excluir.png" alt="">
                </a>
            </td>
        </tr>
    <?php endforeach; ?>


</table>

<?php
    //Incluir o footer
    include_once(__DIR__ . "/../include/footer.php");   
?>
    
