<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schedules'), ['controller' => 'Schedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schedule'), ['controller' => 'Schedules', 'action' => 'add']) ?> </li>
    </ul>
</nav> -->

  <div class="py-5 bg-light">
    <div class="container-fluid">
      <div class="row w-100">
        <div class="w-50 mx-auto" id="book">
          <div class="card bg-light">
            <div class="bg-light p-3">
              <img class="img-fluid d-block rounded-circle mx-auto" src="https://pingendo.github.io/templates/sections/assets/test_carlito.jpg"> </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card-body bg-light text-center">
                <h3><?= h($user->name) ?></h3>
                <h6><b>Usuário:</b> <?= h($user->username) ?></h6>
                <h6><b>CPF: </b> <?= h($user->cpf) ?></h6>
                <h6><b>Telefone:</b> <?= h($user->phone) ?></h6>
                <h6><b>Data de Nascimento:</b> <?= h($user->date_of_birth->format('d/m/Y')) ?></h6>
                <h6><b>Email:</b> <?= h($user->email) ?></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>