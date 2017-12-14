<?php $user = $this->request->session()->read('Auth.User'); ?>
<div class="p-4 w-100 my-3">
    <div class="row w-100">
      <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item"><?= __('Serviços') ?></li>
            <?php if($user['role'] == 'admin'): ?>
                <li class="list-group-item"><?= $this->Html->link(__('Adicionar Serviço'), ['action' => 'add']) ?></li>
                
                <li class="list-group-item"><?= $this->Html->link(__('Nova Barbearia'), ['controller' => 'Barbershops', 'action' => 'add']) ?></li>

                <li class="list-group-item"><?= $this->Html->link(__('Lista de Agendamentos'), ['controller' => 'Schedules', 'action' => 'index']) ?></li>
                <li class="list-group-item"><?= $this->Html->link(__('Novo Agendamento'), ['controller' => 'Schedules', 'action
                ' => 'add']) ?></li>

            <?php endif; ?>
            
        </ul>
    </div>
    <div class="col-md-9">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('barbershops_id') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($services as $service): ?>
                    <tr>
                        <td><?= $this->Number->format($service->id) ?></td>
                        <td><?= h($service->name) ?></td>
                        <td><?= h($service->price) ?></td>
                        <td><?= $service->has('barbershop') ? $this->Html->link($service->barbershop->name, ['controller' => 'Barbershops', 'action' => 'view', $service->barbershop->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $service->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
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





