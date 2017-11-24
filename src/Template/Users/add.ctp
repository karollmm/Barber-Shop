<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
  </ul>
</nav> -->

<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> </div>
      <div class="col-md-6">
        <div class="card bg-light text-dark">
          <div class="card-body">
            <h1 class="mb-4 text-center">Adicionar Usuário</h1>
            <?= $this->Form->create($user) ?>
            <?php
            echo $this->Form->control('name', ['class' => 'form-control', 'label' => 'Nome:', 'placeholder' => 'Nome']);
            echo $this->Form->control('cpf', ['class' => 'form-control', 'label' =>'CPF:', 'placeholder' => 'CPF']);
            echo $this->Form->control('email', ['class' => 'form-control', 'label' =>'Email:', 'placeholder' => 'Email']);
            echo $this->Form->control('phone', ['class' => 'form-control', 'label' => 'Telefone:', 'placeholder' => 'Telefone']);
            echo $this->Form->control('date_of_birth', 
              
              [
                'class' => 'form-control', 'label' => 'Date de Nascimento: ','dateFormat' => 'DMY','minYear' => date ( 'Y' ) -90, 'maxYear' => date ( 'Y' ) -10, 
                'monthNames' => 
                [ '01' => 'Janeiro','02' => 'Fevereiro','03' => 'Março','04' => 'Abril','05' => 'Maio','06' => 'Junho','07' => 'Julho','08' => 'Agosto','09' => 'Setembro','10' => 'Outubro','11' => 'Novembro','12' => 'Dezembro'] 
              ] 
              
            );
            echo $this->Form->control('age', ['class' => 'form-control', 'label' => 'Idade:', 'placeholder' => 'Idade']);
            echo $this->Form->control('username', ['class' => 'form-control', 'label' => 'Usuário:', 'placeholder' => 'Usuário']);
            echo $this->Form->control('password', ['class' => 'form-control', 'label' => 'Senha:', 'placeholder' => 'Senha']);
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
