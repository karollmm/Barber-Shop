<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedback $feedback
 */
?>
<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> </div>
        <div class="col-md-6">
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <h1 class="mb-4 text-center">Feedbacks do Site</h1>
                    <span>Atenção, os campos marcados com o * asterísco são obrigatórios. </span>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ol class="side-nav">
        
        <li><?= $this->Html->link(__('Lista de Feedbacks'), ['action' => 'index']) ?></li>
    </ol>
</nav>
<div class="feedbacks form large-9 medium-8 columns content">
    <?= $this->Form->create($feedback) ?>
   
    <br>
            <?= $this->Form->control('author_name', ['class' => 'form-control', 'label' => 'Nome: ', 'placeholder' => 'Nome do Autor']); ?>
            <br>
            <?= $this->Form->control('content', ['class' => 'form-control', 'label' =>'Conteúdo:', 'placeholder' => 'Conteúdo']); ?>
            <br>
            <?= $this->Form->control('time_of_publication', ['class' => 'form-control', 'label' =>'Data da publicação:', 'placeholder' => 'Data da publicação']); ?>
         
                <?= $this->Form->button('Salvar '.'<i class="fa fa-check" aria-hidden="true"></i>', ['class' => 'btn text-center text-white 
                btn-block btn-success', 'type' => 'Submit']) ?>
   
             </div>
         </div>
     </div>
     </div>
 </div>
 </div>
</div>