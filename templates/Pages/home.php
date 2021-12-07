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

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>: Pagina Principal
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.min']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?> 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="visually-hidden">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="d-flex"">
      <input class="form-control me-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    
    <div class="container">
    <h2>Bienvenidos a CakePHP <?= Configure::version() ?> </h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consequatur fugit, incidunt corrupti illo nam nulla dolorem assumenda voluptatum, explicabo ipsa reprehenderit vel? Optio voluptas dicta beatae quia fuga ad!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse sapiente dolor unde eligendi in! Odit dicta commodi harum? Unde voluptatibus commodi cum iure quibusdam? Beatae velit consequuntur nulla quo cupiditate.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae maxime non impedit, ut voluptatum iusto placeat hic, voluptatem magni vel autem ullam quidem quis. Perferendis deleniti error consequuntur provident maxime!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil voluptas accusamus eaque fugit quas ut dolore aut modi unde ipsa voluptatibus numquam corporis debitis esse excepturi, quod soluta, odit cum?</p>
    </div>
</body>
</html>
