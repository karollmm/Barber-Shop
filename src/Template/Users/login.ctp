<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card p-5 bg-light text-dark">
          <div class="card-body">
            <?= $this->Flash->render('auth');?>
            <?= $this->Form->create(null, array('class'=>"form-group")) ?>
            <h1 class="mb-4">Login</h1>
            <fieldset>
              <p>
                <strong><?= __('Por favor, entre com seu e-mail e senha: ') ?></strong>
              </p>
              <?= $this->Form->control('username',['class' => 'form-control', 'label' => 'E-mail', 'placeholder' => 'E-mail']) ?>
              <br>
              <?= $this->Form->control('password',['class' => 'form-control', 'label' => 'Senha', 'placeholder' => 'Senha']) ?>
            </fieldset>
            <br>
            <?= $this->Form->button(__('Entrar'), array('type' => 'submit', 'class' => 'btn btn-block btn-success btn-lg')); ?>
            <?= $this->Form->end() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>