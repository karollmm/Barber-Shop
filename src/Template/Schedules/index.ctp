<?php $user = $this->request->session()->read('Auth.User'); ?>
<div class="p-4 w-100 my-3">
    <div class="row w-100">
      <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item"><?= __('Agendamento') ?></li>
            <?php if($user['role'] == 'userBarber'): ?>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Agendamento'), ['action' => 'add']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Editar Agendamento'), ['action' => 'edit']) ?></li>
            <?php endif; ?>

            <?php if($user['role'] != 'userBarber'): ?>
                <li class="list-group-item"><?= $this->Html->link(__('Lista de Serviços'), ['controller' => 'Services', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
            <?php endif; ?>

            <?php if($user['role'] == 'admin'): ?>
                <li class="list-group-item"><?= $this->Html->link(__('Lista de Usuários'), ['controller' => 'Users', 'action' => 'index']) ?></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="col-md-9">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('day') ?></th>
                    <th><?= $this->Paginator->sort('hour') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('service_id') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($schedules as $schedule): ?>
                    <tr>
                        <td><?= $this->Number->format($schedule->id) ?></td>
                        <td><?= h($schedule->day) ?></td>
                        <td><?= h($schedule->hour) ?></td>
                        <td><?= $schedule->has('user') ? $this->Html->link($schedule->user->name, ['controller' => 'Users', 'action' => 'view', $schedule->user->id]) : '' ?></td>
                        <td><?= $schedule->has('service') ? $this->Html->link($schedule->service->name, ['controller' => 'Services', 'action' => 'view', $schedule->service->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $schedule->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $schedule->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $schedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schedule->id)]) ?>
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






