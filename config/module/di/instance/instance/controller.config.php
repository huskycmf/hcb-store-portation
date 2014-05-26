<?php
return array(
    // Import
    'HcbStorePortation-Controller-Import' => array(
        'parameters' => array(
            'inputData' => 'HcbStorePortation-Data-Import',
            'serviceCommand' => 'HcbStorePortation-Service-Import',
            'jsonResponseModelFactory' => 'HcbStorePortation-Json-View-StatusMessageDataModelFactory'
        )
    )
);
