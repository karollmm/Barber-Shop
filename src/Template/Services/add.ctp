<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Barbershops'), ['controller' => 'Barbershops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barbershop'), ['controller' => 'Barbershops', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> </div>
      <div class="col-md-6">
        <div class="card text-white p-5 bg-dark">
          <div class="card-body">
            <h1 class="mb-4 text-center">Adicionar Serviço</h1>
           
            <?php
            echo $this->Form->control('name', ['class' => 'form-control', 'label' => 'Nome:', 'placeholder' => 'Nome']);
            echo $this->Form->control('price', ['class' => 'form-control', 'label' =>'Preço:', 'placeholder' => 'Preço']);
            echo $this->Form->control('detail', ['class' => 'form-control', 'label' =>'Detalhe:', 'placeholder' => 'Detalhe']);
            
          
             ?>       
                <br>
            <?= $this->Form->button('Salvar '.'<i class="fa fa-check" aria-hidden="true"></i>', ['class' => 'btn text-center text-white btn-block btn-success', 'type' => 'Submit']) ?>
            <?= $this->Form->end() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
