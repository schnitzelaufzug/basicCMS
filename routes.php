<?php

$router->get('', 'home');
$router->get('/', 'home');

$router->get('admin', 'admin');
$router->post('admin', 'admin');
$router->get('edit', 'edit');
$router->post('edit', 'edit');

