<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Barbershop $barbershop
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $barbershop->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $barbershop->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Barbershops'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barbershops form large-9 medium-8 columns content">
    <?= $this->Form->create($barbershop) ?>
    <fieldset>
        <legend><?= __('Edit Barbershop') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('cnpj');
            echo $this->Form->control('cpf');
            echo $this->Form->control('phone');
            echo $this->Form->control('cep');
            echo $this->Form->control('state');
            echo $this->Form->control('city');
            echo $this->Form->control('street');
            echo $this->Form->control('number');
            echo $this->Form->control('complement');
            echo $this->Form->control('file_barbershops_id', ['options' => $files, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
