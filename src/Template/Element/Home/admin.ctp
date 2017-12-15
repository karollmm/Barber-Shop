 <?php $user = $this->request->session()->read('Auth.User'); ?>
 <!-- nav-menu -->
 <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">

  <div class="container-fluid">

    <?= $this->Html->link(' <b> BarberShop </b> ', ['controller' => 'pages','action' => 'home'],
    ['escape' => false, 'class' => 'navbar-brand']) ?>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
    aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>

    <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">

      <ul class="navbar-nav">

        <li class="nav-item">

          <div class="btn-group">

            <button class="btn navbar-btn ml-3 btn-dark dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home" aria-hidden="true"></i> Barbearia</button>

            <div class="dropdown-menu">

              <?= $this->Html->link(__(' Cadastrar Barbearia') ,['controller' => 'barbershops', 'action' => 'add'], ['escape' => false, 'class' => 'dropdown-item'])?>

              <div class="dropdown-divider"></div>

              <?= $this->Html->link(__(' Barbearias Cadastradas') ,['controller' => 'barbershops', 'action' => 'index'], ['escape' => false, 'class' => 'dropdown-item'])?>                   
            </div>

          </li>


          <li class="nav-item">

            <div class="btn-group">

              <button class="btn navbar-btn ml-3 btn-dark dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book" aria-hidden="true"></i> Serviço</button>

              <div class="dropdown-menu">

                <?= $this->Html->link(__('Adicionar Serviço') ,['controller' => 'services', 'action' => 'add'], ['escape' => false, 'class' => 'dropdown-item'])?>

                <div class="dropdown-divider"></div>

                <?= $this->Html->link(__('Serviços Cadastrados') ,['controller' => 'services', 'action' => 'index'], ['escape' => false, 'class' => 'dropdown-item'])?>

              </div>

            </li>


            <li class="nav-item">

            <div class="btn-group">

              <button class="btn navbar-btn ml-3 btn-dark dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar" aria-hidden="true"></i> Agendamento</button>

              <div class="dropdown-menu">

                <?= $this->Html->link(__('Realizar um Agendamento') ,['controller' => 'schedules', 'action' => 'add'], ['escape' => false, 'class' => 'dropdown-item'])?>

                <div class="dropdown-divider"></div>

                <?= $this->Html->link(__('Agendamento cadastrados') ,['controller' => 'schedules', 'action' => 'index'], ['escape' => false, 'class' => 'dropdown-item'])?>

              </div>

            </li>

            <li class="nav-item">

              <div class="btn-group">

                <button class="btn navbar-btn ml-3 btn-dark dropdown-toggle" data-toggle="dropdown"> 
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $user['name'] ?> 
                </button>

                <div class="dropdown-menu">

                  <?= $this->Html->link(__('Perfil') ,['controller' => 'Users', 'action' => 'view', $user['id']], ['escape' => false, 'class' => 'dropdown-item'])?>

                  <div class="dropdown-divider"></div>

                  <?= $this->Html->link(__(' Editar dados') ,['controller' => 'Users', 'action' => 'edit', $user['id']], ['escape' => false, 'class' => 'dropdown-item'])?>

                  <div class="dropdown-divider"></div>

                  <?= $this->Html->link(__('Sair'),['controller' => 'Users', 'action' => 'logout'], ['escape' => false, 'class' => 'dropdown-item'])?>                   

                </div>

              </li>

            </ul>

          </div>

        </div>

      </div>

    </div>

  </nav>
<!-- nav-menu -->