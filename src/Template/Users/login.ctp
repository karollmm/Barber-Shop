<div class="py-5 bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?= $this->Flash->render('auth');?>
        <?= $this->Form->create() ?>
        <h2>Login</h2>
        <fieldset>
          <p>
            <strong><?= __('Por favor, entre com seu e-mail e senha: ') ?></strong>
          </p>
          <?= $this->Form->control('username',['label' => 'E-mail', 'class' => 'form-control']) ?>
          <?= $this->Form->control('password',['label' => 'Senha', 'class' => 'form-control']) ?>
        </fieldset>
        <?= $this->Form->button(__('Entrar'), array('type' => 'submit', 'class' => 'btn btn-block btn-success btn-lg')); ?>
        <?= $this->Form->end() ?>
      </div>
      <div class="col-md-6"></div>
    </div>
  </div>
</div>