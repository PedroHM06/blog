<?php 
$detalhe = array();
foreach ($posts as $post){
    $detalhe[] = array(
        'id' => $post['Post']['id'],
        'titulo' => $post['Post']['titulo'],
        'data_criacao' => $post['Post']['data_criacao'],
        'data_alteracao' => $post['Post']['data_alteracao']
    );
}
?>

<h1>Posts</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Data de Criação</th>
            <th scope="col">Data de Alteração</th>

        </tr>
    </thead>
    <tbody>
        <button type="button"  class="btn btn-success" onclick="add()">Novo +</button>
        <?php foreach ($detalhe as $index ): ?>
        <tr>
                <td>
                    <button type="button" class="btn" onclick="view(<?= $index['id'];?>)"><?php echo $index['titulo']; ?></button>
                </td>
                <td>
                <?php
                    $data_criacao_formatada = date('d/m/y - h:m', strtotime($index['data_criacao']));
                    ?>

                    <p class="date" dateFormat="dd/mm/yy"><?php echo $data_criacao_formatada; ?></p>

                </td>
                <td>
                <?php
                    $data_alteracao_formatada = date('d/m/y - h:m', strtotime($index['data_alteracao']));
                    ?>

                    <p class="date" dateFormat="dd/mm/yy"><?php echo $data_alteracao_formatada; ?></p>
                </td>
                <td>
                    <button type="button" class="btn btn-secondary" onclick="edit(<?= $index['id'];?>)">Editar</button>
                    
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="del(<?= $post['Post']['id'];?>)">Excluir</button>
                </td>

                
        </tr>

        <?php endforeach; ?>
    </tbody>
</table>
   