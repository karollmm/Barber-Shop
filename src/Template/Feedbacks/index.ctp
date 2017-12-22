<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback[]|\Cake\Collection\CollectionInterface $feedbacks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ol class="side-nav">
        
        <li><?= $this->Html->link(__('Novo Feedback'), ['action' => 'add']) ?></li>
    </ol>
</nav>
<div class="feedbacks index large-9 medium-8 columns content">
    <h3><?= __('Feedbacks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Número') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome do Autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data da Publicação') ?></th>
              
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feedbacks as $feedback): ?>
            <tr>
                <td><?= $this->Number->format($feedback->id) ?></td>
                <td><?= h($feedback->author_name) ?></td>
                <td><?= h($feedback->time_of_publication) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $feedback->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $feedback->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $feedback->id], ['confirm' => __('Tem Certeza Que Quer Deletar Isso?', $feedback->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
        <br><br><br><br>
    </div>
</div>
