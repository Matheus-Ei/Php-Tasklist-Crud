<?php
namespace Config;

$routes = [
    'tasks' => [
        'controller' => 'App\Controllers\TaskController',
        'method' => 'index',
    ],

    'tasks/create' => [
        'controller' => 'App\Controllers\TaskController',
        'method' => 'create',
    ],

    'tasks/delete' => [
        'controller' => 'App\Controllers\TaskController',
        'method' => 'delete',
    ],

    'tasks/update' => [
        'controller' => 'App\Controllers\TaskController',
        'method' => 'update',
    ],
  ];
