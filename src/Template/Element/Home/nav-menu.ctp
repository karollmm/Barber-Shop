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
          <a class="btn navbar-btn ml-2 text-white btn-dark" href="#"><i class="fa fa-users" aria-hidden="true"></i> Quem Somos </a>
        </li>

        <li class="nav-item">

          <div class="btn-group">

            <button class="btn btn-dark dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 
            Cadastre-se </button>

            <div class="dropdown-menu">

              <?= $this->Html->link(__('<i class="fa fa-user" aria-hidden="true"></i>' . ' Sou Cliente'), 
              ['controller' => 'Users', 'action' => 'add_user'], ['escape' => false, 'class' => 'dropdown-item']) ?>

              <div class="dropdown-divider"></div>

              <?= $this->Html->link(__('<i class="fa fa-home" aria-hidden="true"></i>' . ' Tenho uma Barbearia'), 
              ['controller' => 'Users', 'action' => 'add_barber'], ['escape' => false, 'class' => 'dropdown-item'])?>

            </div>

          </li>

          <li class="nav-item">

            <?= $this->Html->link( '<i class="fa fa-sign-in" aria-hidden="true"></i>' . ' Login ', ['controller' => 'users','action' => 'login'], 
            ['class' => 'btn navbar-btn ml-2 text-white btn-dark', 'escape' => false]) ?>

          </li>

        </ul>

      </div>

    </div>

  </div>

</div>

</nav>
<!-- nav-menu -->