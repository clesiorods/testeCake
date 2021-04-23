<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<h1>Cadastrar Usuário</h1>


<div class="column-responsive column-80">
    <div class="users form content">
        <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
    <?php   
        echo $this->Form->control('nome');
        echo $this->Form->control('email');
    ?>
    </fieldset>
    <?=    $this->Form->button(__('Submit')) ?>
    <?=    $this->Form->end() ?>
    </div>
</div>
</div>