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

$this->layout='default'; //include para pagina default

?>


<!-- col ==> coluna, row ==> linha, my(div) ==> margin, py ==> padding(div), h ==> heigth, w => width, 
    mr ==> margin right, ml ==> margin left -->
  <div class="py-5 text-center opaque-overlay h-50" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/cover_event.jpg&quot;);">
    <div class="py-5 w-100">
      <div class="container-fluid py-5 my-5 h-75">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-7">
            <?= $this->Form->create(null, ['class' => 'form-inline']) ?>
              <input type="text" name="search" class="form-control w-75" style="height: 50px; font-style: italic;" 
              placeholder="Procure por sua barbearia favorita, serviços ou endereço">
              <button type="submit" class="btn btn-dark mx-1" style="height: 50px;"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
            <?= $this->Form->end(); ?>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </div>

<div class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 p-4">
          <div class="img-fluid d-block rounded-circle mx-auto bolha">
           <a href="services/add" class="link"> <i class="fa fa-scissors fa-4x icon-bolha"></i></a>
          </div>
          <p><br><b>Serviços</b>
        </div>
        <div class="col-md-4 p-4">
          <div class="img-fluid d-block rounded-circle mx-auto bolha">
           <a href="Services.add" class="link"><i class="fa fa-map-marker fa-4x icon-bolha"></i></a>
          </div>
          <p><br><b>Localização</b>
        </div>
        <div class="col-md-4 p-4">
          <div class="img-fluid d-block rounded-circle mx-auto bolha">
           <a href="#" class="link"><i class="fa fa-phone fa-4x icon-bolha"></i></a>
          </div>
          <p><br><b>Contato</b>
        </div>
        <div class="col-md-4 p-4">
          <div class="img-fluid d-block rounded-circle mx-auto bolha">
          <a href="schedules/add" class="link"> <i class="fa fa-street-view fa-4x icon-bolha"></i></a>
          </div>
          <p><br><b>Agendamento</b>
        </div>
        <div class="col-md-4 p-4">
          <div class="img-fluid d-block rounded-circle mx-auto bolha">
          <a href="feedbacks/add" class="link"> <i class="fa fa-bell fa-4x icon-bolha"></i></a>
          </div>
          <p><br><b>Feedbacks</b>
        </div>
        <div class="col-md-4 p-4">
          <div class="img-fluid d-block rounded-circle mx-auto bolha">
          <a href="#" class="link"> <i class="fa fa-star fa-4x icon-bolha"></i></a>
          </div>
          <p><br><b>Tendências</b>
        </div>
      </div>
    </div>
  </div>


<div class="py-5 bg-light">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center mb-5 text-dark">Tendências de Cortes</h1>
        </div>
      </div>
      <div class="row">
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_6.jpg" class="img-fluid"> </a>
        </div>
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_2.jpg" class="img-fluid"> </a>
        </div>
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_3.jpg" class="img-fluid"> </a>
        </div>
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_1.jpg" class="img-fluid"> </a>
        </div>
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_5.jpg" class="img-fluid"> </a>
        </div>
        <div class="p-0 col-md-2 col-6">
          <a href="stories.html">
            <img src="https://pingendo.github.io/templates/sections/assets/stories_4.jpg" class="img-fluid"> </a>
        </div>
      </div>
    </div>
  </div>
  