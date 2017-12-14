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
	<?= $this->Html->css('style-barbershop.css') ?>

</head>

<body>

	<!-- nav-menu -->
	<?= $this->element('home/nav-menu') ?>
	<!-- nav-menu -->

	<?= $this->Flash->render() ?>
	<!-- conteudo -->
	<div class="main-content">
		<?= $this->fetch('content')?>
	</div>
	<!-- conteudo -->


	<!-- footer -->
	<?= $this->element('home/footer') ?>
	<!-- footer -->

</body>
</html>
