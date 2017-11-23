<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Barbershop $barbershop
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Barbershops'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>

    
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> </div>
      <div class="col-md-6">
        <div class="card text-white p-5 bg-dark">
          <div class="card-body">
            <h1 class="mb-4 text-center">Adicionar Barbearia</h1>
           
            <?php
            echo $this->Form->control('name', ['class' => 'form-control', 'label' => 'Nome', 'placeholder' => 'Nome']);
            echo $this->Form->control('cnpj', ['class' => 'form-control', 'label' =>'CNPJ', 'placeholder' => 'CNPJ']);
            echo $this->Form->control('cpf', ['class' => 'form-control', 'label' =>'CPF', 'placeholder' => 'CPF']);
            echo $this->Form->control('phone', ['class' => 'form-control', 'label' => 'Telefone', 'placeholder' => 'Telefone']);
            echo $this->Form->control('cep', ['class' => 'form-control', 'label' => 'CEP', 'placeholder' => 'CEP']);
            echo $this->Form->control('state', ['class' => 'form-control', 'label' => 'Estado', 'placeholder' => 'Estado']);
            echo $this->Form->control('city', ['class' => 'form-control', 'label' => 'Cidade', 'placeholder' => 'Cidade']);
            echo $this->Form->control('street', ['class' => 'form-control', 'label' => 'Rua', 'placeholder' => 'Rua']);
            echo $this->Form->control('number', ['class' => 'form-control', 'label' => 'Número', 'placeholder' => 'Número']);
            echo $this->Form->control('complement', ['class' => 'form-control', 'label' => 'Complemento', 'placeholder' => 'Complemento']);
            echo $this->Form->control('servece_id', ['class' => 'form-control', 'label' => 'Serviços', 'placeholder' => 'Serviços',  'options' => $services]);
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

