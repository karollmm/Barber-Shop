<?php 

use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;


?>


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
      
      <p style="text-align: center; color: red"> <?= $connected ? '' : $errorMsg ?> </p>

    </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>