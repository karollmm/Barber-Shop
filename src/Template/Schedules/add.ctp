<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Schedule $schedule
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Schedules'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav> -->

<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> </div>
      <div class="col-md-6">
        <div class="card bg-light text-dark">
          <div class="card-body">
            <h1 class="mb-4 text-center">Adicionar Agendamento</h1>
              <?= $this->Form->create($schedule) ?>
            <?php
            echo $this->Form->control('day', 
              
              [
                'class' => 'form-control', 'label' => 'Data: ','dateFormat' => 'DMY','minYear' => date ( 'Y' ) -90, 'maxYear' => date ( 'Y' ) -10, 
                'monthNames' => 
                [ '01' => 'Janeiro','02' => 'Fevereiro','03' => 'Março','04' => 'Abril','05' => 'Maio','06' => 'Junho','07' => 'Julho','08' => 'Agosto','09' => 'Setembro','10' => 'Outubro','11' => 'Novembro','12' => 'Dezembro'] 
              ]
            );
            echo("<br />\n");
             echo $this->Form->control('hour', ['class' => 'form-control', 'label' =>'Hora: ', 'placeholder' => 'Hora']);
             echo("<br />\n");
            echo $this->Form->control('user', ['class' => 'form-control', 'label' =>'Usuario:', 'placeholder' => 'Usuario', 'options' => $users]);
            echo("<br />\n");
            echo $this->Form->control('service_id', ['class' => 'form-control', 'label' => 'Serviço:', 'placeholder' => 'Serviço', 'options' => $services]);
            echo("<br />\n");
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
