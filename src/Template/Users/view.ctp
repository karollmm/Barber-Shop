<?php $logged = $this->request->session()->read('Auth.User'); ?>

  <div class="bg-light w-100">
    <div class="w-100 container-fluid">
      <div class="row w-100">
      <div class="col-md-3 p-4">
        <ul class="list-group">
          <li class="list-group-item"><i class="fa fa-user-circle-o"></i> Perfil</li>
          <li class="list-group-item"><?= $this->Html->link(__('Editar Usuário'), ['action' => 'edit', $user->id]) ?> </li>
          <?php if($logged['role'] === 'admin'): ?>
            <li class="list-group-item"><?= $this->Html->link(__('Lista Usuários'), ['action' => 'index']) ?> </li>
          <?php endif; ?>
        </ul>
      </div>
      <div class="col-md-6 p-4 text-center">
        <img class="img-fluid d-block rounded-circle mx-auto" src="<?= $user->file_users_id['path'] == null ? 'https://pingendo.github.io/templates/sections/assets/test_fish.jpg' : $user->file_users_id['path'].$user->file_users_id['name'] ?>" >
        <p class="my-4">
          <h3><?= h($user->name) ?></h3>
          <h6><b>Usuário:</b> <?= h($user->username) ?></h6>
          <h6><b>CPF: </b> <?= h($user->cpf) ?></h6>
          <h6><b>Telefone:</b> <?= h($user->phone) ?></h6>
          <h6><b>Data de Nascimento:</b> <?= h($user->date_of_birth->format('d/m/Y')) ?></h6>
          <h6><b>Email:</b> <?= h($user->email) ?></h6>
        </p>
      </div>
    </div>
  </div>
</div>