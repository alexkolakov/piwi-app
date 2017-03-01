<?php
$cnf = [
    'index' => [
        'pattern' => '/',
        'action' => 'Index::home'
    ],
    'show_controller_capabilities' => [
        'pattern' => '/show-controller-capabilities/*',
        'action' => 'Index::showControllerCapabilities'
    ]
];

return $cnf;