<?php

$router->define([
    '' => 'routing/redirect.php',
    'login' => 'views/login.php',
    'table' => 'views/table.php',
    'graph' => 'views/graph.php',

    'graph-data' => 'controllers/GraphData.php',
    'logout' => 'controllers/LogoutController.php',
]);