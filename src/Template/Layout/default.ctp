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
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><b> BarberShop </b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
      aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa d-inline fa-lg fa-bookmark-o"></i> Cadastre sua Barbearia </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa d-inline fa-lg fa-envelope-o"></i> Quem Somos </a>
          </li>
        </ul>
        <a class="btn navbar-btn ml-2 text-white btn-secondary"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Login </a>
      </div>
    </div>
  </nav>
  <!-- nav-menu -->


  <!-- conteudo -->
  <div class="main-content">
    <?= $this->fetch('content')?>
  </div>
  <!-- conteudo -->

  <div class="py-5 bg-dark text-white h-75">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2017 BarberShop - All rights reserved.</p>
        </div>
      </div>
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
