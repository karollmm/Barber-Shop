<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeTitle = 'BarberShop'; //titulo da pagina home

use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;

?>

<!DOCTYPE html>
<html>
<head>

  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    <?= $cakeTitle?>
  </title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

  <?= $this->Html->css('bootstrap-pingendo.css') ?>
  <?= $this->Html->css('barber-shop-style.css') ?>



</head>

<body>

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

                <?= $this->Html->link( '<i class="fa fa-user" aria-hidden="true"></i> ' . 'Sou cliente', ['controller' => 'users','action' => 'add'], 
                ['escape' => false, 'class' => 'dropdown-item']) ?>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#"><i class="fa fa-home" aria-hidden="true"></i> Tenho uma Barbearia </a>

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

<?= $this->Flash->render() ?>
<!-- conteudo -->
<div class="main-content">
  <?= $this->fetch('content')?>
</div>
<!-- conteudo -->

<div class="py-5 bg-dark text-white">
  <footer class="container">
    <div class="row">
      <div class="ml-auto col-12 col-md-3 p-2 col-lg-3">
        <h3 class="mb-4">Barber Shop</h3>
        <ul class="list-unstyled p-1">
          <a href="#" class="text-white">Barbearias</a>
          <br>
          <a href="#" class="text-white">Serviços</a>
          <br>
          <a href="#" class="text-white">Localizações</a>
          <br>
          <a href="#" class="text-white">Agendamentos</a>
        </ul>
      </div>
      <div class="p-2 ml-auto col-md-4 col-12 col-lg-4">
        <h3 class="mb-1">Somos</h3>
        <p class="p-0">"<i class="p-1">Somos uma plataforma de busca e agendamento online, onde você usúario tem muito mais praticidade e facilidade no agendamento de um horario em uma barbearia.</i>" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
          <br> </p>
        </div>
        <div class="ml-auto col-12 col-md-5 p-1 col-lg-4">
          <h3 class="mt-1">Social</h3>
          <i class="fa fa-envelope-o"></i> E-mail: Barbershops@gmail.com<br>
          <i class="fa fa-phone"></i> Telefone:(81) 0000-0000<br><br>
          <div class="align-self-center col-12 my-4">
            <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x d-inline fa-lg mr-3 text-white"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter fa-2x d-inline mx-3 fa-lg text-white"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram fa-2x d-inline mx-3 fa-lg text-white"></i></a>
            <a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus-official fa-2x d-inline mx-3 fa-lg text-white"></i></a>
          </div>
        </div>
      </div>
      <p class="text-center"> © Copyright 2017 BarberShop - All rights reserved. </p>
    </footer>
  </div>
  
  <?php
  
  try {

    $connection = ConnectionManager::get('default');
    $connected = $connection->connect();

  } catch (Exception $connectionError) {

    $connected = false;
    $errorMsg = $connectionError->getMessage();

    if (method_exists($connectionError, 'getAttributes')) :

      $attributes = $connectionError->getAttributes();

      if (isset($errorMsg['message'])) :

        $errorMsg .= '<br />' . $attributes['message'];

      endif;

    endif;

  }
  
  ?>
  
  <ul style="text-align: center; color: red">
    <?= $connected ? '' : $errorMsg ?>
  </ul>
  
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
