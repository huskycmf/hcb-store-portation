<?php
return array(
    'type' => 'literal',
    'options' => array(
        'route' => '/portation'
    ),
    'may_terminate' => false,
    'child_routes' => array(
        'import' => array(
            'type' => 'method',
            'options' => array(
                'verb' => 'post',
                'defaults' => array(
                    'controller' => 'HcbStorePortation-Controller-Import'
                )
            )
        )
    )
);
