<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Barbershop $barbershop
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Barbershop'), ['action' => 'edit', $barbershop->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Barbershop'), ['action' => 'delete', $barbershop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barbershop->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Barbershops'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barbershop'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="barbershops view large-9 medium-8 columns content">
    <h3><?= h($barbershop->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($barbershop->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($barbershop->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($barbershop->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($barbershop->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($barbershop->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($barbershop->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($barbershop->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($barbershop->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $barbershop->has('service') ? $this->Html->link($barbershop->service->name, ['controller' => 'Services', 'action' => 'view', $barbershop->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($barbershop->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($barbershop->number) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Complement') ?></h4>
        <?= $this->Text->autoParagraph(h($barbershop->complement)); ?>
    </div>
</div>
