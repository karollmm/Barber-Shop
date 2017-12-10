<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Barbershops'), ['controller' => 'Barbershops', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barbershop'), ['controller' => 'Barbershops', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="services view large-9 medium-8 columns content">
    <h3><?= h($service->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($service->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= h($service->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Barbershop') ?></th>
            <td><?= $service->has('barbershop') ? $this->Html->link($service->barbershop->name, ['controller' => 'Barbershops', 'action' => 'view', $service->barbershop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($service->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detail') ?></h4>
        <?= $this->Text->autoParagraph(h($service->detail)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Schedules') ?></h4>
        <?php if (!empty($service->schedules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Day') ?></th>
                <th scope="col"><?= __('Hour') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($service->schedules as $schedules): ?>
            <tr>
                <td><?= h($schedules->id) ?></td>
                <td><?= h($schedules->day) ?></td>
                <td><?= h($schedules->hour) ?></td>
                <td><?= h($schedules->user_id) ?></td>
                <td><?= h($schedules->service_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Schedules', 'action' => 'view', $schedules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Schedules', 'action' => 'edit', $schedules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Schedules', 'action' => 'delete', $schedules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
