<?php
return array(
    'router' => include __DIR__ . '/module/router.config.php',
    'di' => include __DIR__ . '/module/di.config.php',

    'asset_manager' => array(
        'resolver_configs' => array(
            'paths' => array(
                'HcbStorePortation' => __DIR__ . '/../public',
            )
        )
    ),

    'hc-backend'=> array(
        'packages' => array(
            'hcb-store-portation' => array(
                'js'=>array(
                    'type'=>'content',
                    'http_path'=>'/js/src/hcb-store-portation'
                )
            )
        )
    )
);
