<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Barbershop[]|\Cake\Collection\CollectionInterface $barbershops
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Barbershop'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barbershops index large-9 medium-8 columns content">
    <h3><?= __('Barbershops') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnpj') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_barbershops_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barbershops as $barbershop): ?>
            <tr>
                <td><?= $this->Number->format($barbershop->id) ?></td>
                <td><?= h($barbershop->name) ?></td>
                <td><?= h($barbershop->cnpj) ?></td>
                <td><?= h($barbershop->phone) ?></td>
                <td><?= h($barbershop->cep) ?></td>
                <td><?= h($barbershop->state) ?></td>
                <td><?= h($barbershop->city) ?></td>
                <td><?= h($barbershop->street) ?></td>
                <td><?= $this->Number->format($barbershop->number) ?></td>
                <td><?= $this->Html->image($barbershop->file_barbershops_id['path'].$barbershop->file_barbershops_id['name'] != null ? $barbershop->file_barbershops_id['path'].$barbershop->file_barbershops_id['name'] : " "); ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $barbershop->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $barbershop->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $barbershop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barbershop->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
