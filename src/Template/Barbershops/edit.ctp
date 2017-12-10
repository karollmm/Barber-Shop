<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Barbershops'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
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
                    <h1 class="mb-4 text-center">Adicionar Barbearias</h1>
                    <span>Atenção, os campos marcados com o * asterísco são obrigatórios. </span>
                    <br>
                    <?= $this->Form->create($barbershop, ['class'=>'form-group', 'type' => 'file']) ?>
                    <br>
                    <?= $this->Form->control('name', ['class' => 'form-control', 'label' => 'Nome: ', 'placeholder' => 'Nome']); ?>
                    <br>
                    <?= $this->Form->control('cnpj', ['class' => 'form-control', 'label' => 'CNPJ: ', 'placeholder' => 'CNPJ']); ?>
                    <br>
                    <?= $this->Form->control('phone', ['class' => 'form-control', 'label' => 'Telefone: ', 'placeholder' => 'Telefone']); ?>
                    <br>
                    <?= $this->Form->control('cep', ['class' => 'form-control', 'label' => 'CEP: ', 'placeholder' => 'CEP']); ?>
                    <br>
                    <?= $this->Form->control('state', ['class' => 'form-control', 'label' => 'Estado: ', 'placeholder' => 'Estado']); ?>
                    <br>
                    <?= $this->Form->control('city', ['class' => 'form-control', 'label' => 'Cidade: ', 'placeholder' => 'Cidade']); ?>
                    <br>
                    <?= $this->Form->control('street', ['class' => 'form-control', 'label' => 'Endereço: ', 'placeholder' => 'Endereço']); ?>
                    <br>
                    <?= $this->Form->control('number', ['class' => 'form-control', 'label' => 'Número: ', 'placeholder' => 'Número']); ?>
                    <br>
                    <?= $this->Form->control('complement', ['class' => 'form-control', 'label' => 'Complemento: ', 'placeholder' => 'Complemento']); ?>
                    <br>
                    <?= $this->Form->control('file_barbershops_id', ['class' => 'form-control', 'label' => 'Image: ', 'type'=>'file']); ?>
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
