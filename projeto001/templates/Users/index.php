
<div class="users index content">
<?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>

    <h3><?php echo 'Usuário' ?></h3>
    <table>
        <thead>
            <tr>
                <th scope="col"><?php echo $this->Paginator->sort('id')?></th>
                <th scope="col"><?php echo $this->Paginator->sort('nome')?></th>
                <th scope="col"><?php echo $this->Paginator->sort('email')?></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->nome; ?></td>
                <td><?php echo $usuario->email; ?></td>
                <td>Ver Editar Apagar</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!--Região destinada ao controle de paginação-->
    <div class="paginator">
        <ul class="pagination">
            <?php echo $this->Paginator->first('<<'.__('Primeira')); ?>
            <?php echo $this->Paginator->prev('<'.__('Anterior')); ?>
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next(__('Próximo').'>'); ?>
            <?php echo $this->Paginator->last(__('Ultima').'>>'); ?>
        </ul>
        <p>
            <?php
                //Trecho de código depreciado, analizar estrutura atual do código
                //pagina atual, quantidade total de paginas e o total de itens

                //echo $this->Paginator->counter(['format'] => __('Pagina {{page}}')) 
            ?>
        </p>
    </div>
</div>


<?php

//var_dump($usuarios);


?>