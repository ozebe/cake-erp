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
 * @var \App\View\AppView $this
 */
/**
 *
 */
$cakeDescription = 'CakeERP';
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
<div class="navbar-fixed">
    <nav> <!-- navbar content here  -->
        <div class="nav-wrapper">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <a href="#" class="brand-logo menu" >Menu</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#!"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </nav>
</div>


<!-- Dropdown Gestão de acesso administrador-->
<ul id='dropdown-ga-adm' class='dropdown-content'>
    <li>
        <?= $this->Html->link('Usuários<i class="material-icons">person</i>',
            ['controller' => 'GaUsuario', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
    <li>
        <?= $this->Html->link('Niveis de acesso<i class="material-icons">list_alt</i>',
            ['controller' => 'GaNivelAcesso', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
    <li>
        <?= $this->Html->link('Niveis por usuários<i class="material-icons">how_to_reg</i>',
            ['controller' => 'GaNivelUsuario', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
</ul>
<!----------------------------------->

<!-- Dropdown Gestão de acesso -->
<ul id='dropdown-ga' class='dropdown-content'>
    <li>
        <?= $this->Html->link('Usuários<i class="material-icons">person</i>',
            ['controller' => 'GaUsuario', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
</ul>
<!----------------------------------->

<!-- Dropdown Gestão de estoque administrador-->
<ul id='dropdown-ge-adm' class='dropdown-content'>
    <li>
        <?= $this->Html->link('Unidades de medida<i class="material-icons">list</i>',
            ['controller' => 'GeUnidadeMedida', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
</ul>
<!----------------------------------->

<!-- Dropdown Gestão de estoque-->
<ul id='dropdown-ge' class='dropdown-content'>
    <li>
        <?= $this->Html->link('produtos<i class="material-icons">list</i>',
            ['controller' => 'GeUnidadeMedida', 'action' => 'index'],
            ['escape' => false]
        );?>
    </li>
</ul>
<!----------------------------------->

<!--NAV BAR COM SLIDE-->
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
            <div class="background green darken-3">
               <!-- <img src="images/side_wallpaper.jpg"> -->
            </div>
            <!-- <a href="#user"><img class="circle" src="images/yuna.jpg"></a> -->

            <a href="#name"><span class="white-text name">
                                <?php
                                if($logado == true){echo $GaUsuarioLogado->nome;} else{echo 'Não logado';}
                                ?>
                </span></a> <!-- nome do usuário -->

            <a href="#email"><span class="white-text email">
                                                    <?php
                                                    if($logado == true){echo $GaUsuarioLogado->usuario;} else{echo '';}
                                                    ?>
                </span></a> <!-- usuário do usuário -->
        </div></li>
    <?php
    //se o usuario estiver logado
    if($logado == true){
        //foreach para verificar niveis do usuario logado
        foreach($nivelUsuarioLogado as $niveis) {
            //se o usuário for administrador libera todos os módulos
            if($niveis->ga_nivel_acesso->sigla == "ADM"){
                echo '<li><a class="dropdown-trigger" href="#!" data-target="dropdown-ga-adm"><i class="material-icons">group</i>Gestão de acesso</a></li>';
                echo '<li><a class="dropdown-trigger" href="#!" data-target="dropdown-ge-adm"><i class="material-icons">store</i>Gestão de estoque</a></li>';

                break;
             //se o usuário estiver no gestão de acesso
            }elseif($niveis->ga_nivel_acesso->sigla == "GA"){
                echo '<li><a class="dropdown-trigger" href="#!" data-target="dropdown-ga"><i class="material-icons">group</i>Gestão de acesso</a></li>';

            }elseif($niveis->ga_nivel_acesso->sigla == "GE"){
                echo '<li><a class="dropdown-trigger" href="#!" data-target="dropdown-ge"><i class="material-icons">store</i>Gestão de estoque</a></li>';

            }
        }
        echo '<li><div class="divider"></div></li>';

            echo '<li><a class="subheader">Usuário</a></li>';
            echo '<li>';
            echo $this->Html->link('Sair<i class="material-icons">exit_to_app</i>',
                ['controller' => 'GaUsuario', 'action' => 'logout'],
                ['escape' => false]
            );
            echo '</li>';
        } else{echo '';}
        ?>


</ul>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
