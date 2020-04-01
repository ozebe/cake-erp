<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="theme-color" content="#000051"> muda a cor da barra no mobile-->
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- Carrega os ícones-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">
    <?= $this->Html->css('materialize.min.css') ?>
    <?= $this->Html->script('jquery-3.4.1.min.js'); ?>
    <?= $this->Html->script('materialize.min.js'); ?>
    <?= $this->Html->script('init.js'); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<!-- Dropdown Gestão de acesso administrador-->
<ul id='dropdown-ga-adm' class='dropdown-content'>
    <li>
        <?= $this->Html->link('Usuários',
            ['controller' => 'GaUsuario', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
    <li>
        <?= $this->Html->link('Niveis de acesso',
            ['controller' => 'GaNivelAcesso', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
    <li>
        <?= $this->Html->link('Niveis por usuários',
            ['controller' => 'GaNivelUsuario', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
</ul>
<!----------------------------------->
<div class="row">
    <div class="container">
        <div class="col s12 m6 l3">

                <div class="row">
                    <div class="col s12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Gestão de acesso</span>
                                <i class="medium material-icons">group</i>
                            </div>
                            <div class="card-action">
                            <?php
                             echo '<a class="dropdown-trigger" href="#!" data-target="dropdown-ga-adm">Gestão de acesso</a>';
                             ?>
                            </div>
                        </div>
                    </div>
                </div>

        </div>


<div class="col s12 m6 l3 red">
    <p>s12 m6 l3</p>
</div>
<div class="col s12 m6 l3 blue">
    <p>s12 m6 l3</p>
</div>
<div class="col s12 m6 l3 red">
    <p>s12 m6 l3</p>
</div>
</div>
</div>
</body>
</html>
