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

<?= $this->Flash->render() ?>
<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> </div>
      <div class="col-md-6">
        <div class="card bg-light text-dark">
          <div class="card-body">
            <h1 class="mb-4 text-center">Adicionar Serviços</h1>
            <span>Atenção, os campos marcados com o * asterísco são obrigatórios. </span>
            <br>
            <?= $this->Form->create($service, ['class'=>'form-group', 'type' => 'file']) ?>
            <br>
            <?= $this->Form->control('name', ['class' => 'form-control', 'label' => 'Nome: ', 'placeholder' => 'Nome']); ?>
            <br>
            <?= $this->Form->control('price', ['class' => 'form-control', 'label' =>'Preço:', 'placeholder' => 'Preço']); ?>
            <br>
            <?= $this->Form->control('detail', ['class' => 'form-control', 'label' =>'Detalhes:', 'placeholder' => 'Detalhes']); ?>
            <br>
            <?= $this->Form->control('barbershops_id', ['class' => 'form-control', 'label' => 'Barbearias: ', 'options' => $barbershops]); ?>
            <br>
                <?= $this->Form->button('Salvar '.'<i class="fa fa-check" aria-hidden="true"></i>', ['class' => 'btn text-center text-white 
                btn-block btn-success', 'type' => 'Submit']) ?>
                <?= $this->Form->end() ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
