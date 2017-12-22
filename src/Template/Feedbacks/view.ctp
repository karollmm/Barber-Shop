<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
 */
?>
<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> </div>
        <div class="col-md-6">
            <div class="card bg-light text-dark">
                <div class="card-body">
                 <h1 class="mb-4 text-center">Seu Feedbacks </h1>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ol class="side-nav">
        
        <li><?= $this->Html->link(__('Editar Feedback'), ['action' => 'edit', $feedback->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Feedback'), ['action' => 'delete', $feedback->id], ['confirm' => __('tem certeza que quer apagar isso?', $feedback->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Feedbacks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Feedback'), ['action' => 'add']) ?> </li>
    </ol>
</nav>
<div class="feedbacks view large-9 medium-8 columns content">
    <h3><?= h($feedback->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome do Autor') ?></th>
            <td><?= h($feedback->author_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Número') ?></th>
            <td><?= $this->Number->format($feedback->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data da publicação') ?></th>
            <td><?= h($feedback->time_of_publication) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Conteúdo') ?></h4>
        <?= $this->Text->autoParagraph(h($feedback->content)); ?>
    </div>
</div>
    </div>
         </div>
     </div>
     </div>
 </div>
 </div>
</div>