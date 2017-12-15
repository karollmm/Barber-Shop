<?php $user = $this->request->session()->read('Auth.User'); ?>

<div class="p-4 w-100 my-3">
    <div class="row w-100">
      <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item"><?= __('Barbearia') ?></li>
            <?php if($user['role'] == 'admin'): ?>
                <li class="list-group-item"><?= $this->Html->link(__('New Barbershop'), ['action' => 'add']) ?></li>
            <?php endif; ?>
        </ul>
    </div>
    <div class="col-md-9">
        <table class="table">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('cnpj') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('cep') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('street') ?></th>
                    <th><?= $this->Paginator->sort('number') ?></th>
                    <th><?= $this->Paginator->sort('file_barbershops_id') ?></th>
                    <th><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($barbershops as $barbershop): ?>
                    <tr>
                        <td><?= $this->Number->format($barbershop->id) ?></td>
                        <td><?= h($barbershop->name) ?></td>
                        <td><?= h($barbershop->cnpj) ?></td>
                        <td><?= h($barbershop->phone) ?></td>
                        <td><?= h($barbershop->cep) ?></td>
                        <td><?= h($barbershop->state) ?></td>
                        <td><?= h($barbershop->city) ?></td>
                        <td><?= h($barbershop->street) ?></td>
                        <td><?= $this->Number->format($barbershop->number) ?></td>
                        <td><?= $this->Html->image($barbershop->file_barbershops_id['path'].$barbershop->file_barbershops_id['name'] != null ? $barbershop->file_barbershops_id['path'].$barbershop->file_barbershops_id['name'] : " "); ?></td>
                        <td>
                            <?= $this->Html->link(__('View'), ['action' => 'view', $barbershop->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $barbershop->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $barbershop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barbershop->id)]) ?>
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


