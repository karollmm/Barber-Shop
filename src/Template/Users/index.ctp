<?php $user = $this->request->session()->read('Auth.User'); ?>
<div class="p-4 w-100 my-3 content">
    <div class="row w-100">
      <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item"><?= __('Usuário') ?></li>
            <?php if($user['role'] == 'admin'): ?>
                <li class="list-group-item"><?= $this->Html->link(__('Lista de Agendamentos'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Adicionar um Agendamento'), ['controller' => 'Schedules', 'action' => 'add']) ?></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="col-md-9">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->name) ?></td>
                        <td><?= h($user->cpf) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->phone) ?></td>
                        <td><?= h($user->date_of_birth) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->password) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="container my-5">
          <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
              <ul class="pagination">
                  <?= $this->Paginator->prev('« Anterior', ['class' => 'page-item', 'escape'=>false] ) ?>
                  <?= $this->Paginator->next('Próximo »', ['class' => 'page-item', 'escape'=>false] ) ?>
              </ul>
          </div>
          <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} resgistro(s) de {{count}} total')]) ?></p>
      </div>
  </div>
</div>
</div>








