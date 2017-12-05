<?= $this->Flash->render() ?>
<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> </div>
      <div class="col-md-6">
        <div class="card bg-light text-dark">
          <div class="card-body">
            <h1 class="mb-4 text-center">Editar Dados</h1>
            <span>Atenção, os campos marcados com o * asterísco são obrigatórios. </span>
            <br>
            <?= $this->Form->create($user, ['class'=>'form-group']) ?>
            <br>
            <?= $this->Form->control('name', ['class' => 'form-control', 'label' => 'Nome: ', 'placeholder' => 'Nome']); ?>
            <br>
            <?= $this->Form->control('cpf', ['class' => 'form-control', 'label' =>'CPF:', 'placeholder' => 'CPF']); ?>
            <br>
            <?= $this->Form->control('email', ['class' => 'form-control', 'label' =>'Email:', 'placeholder' => 'Email']); ?>
            <br>
            <?= $this->Form->control('phone', ['class' => 'form-control', 'label' => 'Telefone:', 'placeholder' => 'Telefone']); ?>
            <br>
            <?= $this->Form->control('date_of_birth', 
              [
                'class' => 'form-control', 'placeholder' => 'ano/mes/dia', 'label' => 'Date de Nascimento: ','dateFormat' => 'DMY','minYear' => date ( 'Y' ) -90, 'maxYear' => date ( 'Y' ) -10, 
                'monthNames' => 
                [ '01' => 'Janeiro','02' => 'Fevereiro','03' => 'Março','04' => 'Abril','05' => 'Maio','06' => 'Junho','07' => 'Julho','08' => 'Agosto','09' => 'Setembro','10' => 'Outubro','11' => 'Novembro','12' => 'Dezembro'] 
                ]); ?>
                <br>
                <?= $this->Form->control('username', ['class' => 'form-control', 'label' => 'Usuário:', 'placeholder' => 'Usuário']); ?>
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