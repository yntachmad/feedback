<?php

return [
    'adminEmail' => 'yayasancarepeduli2020@gmail.com',
    'senderEmail' => 'yayasancarepeduli2020@gmail.com',
    'senderName' => 'no-reply',
   // 'menu' => 'active',
    'bsVersion' => '4.x',
    'bsDependencyEnabled' => false,
    'hail812/yii2-adminlte3' => [
        'pluginMap' => [
            'sweetalert2' => [
                'css' => 'sweetalert2-theme-bootstrap-4/bootstrap-4.min.css',
                'js' => 'sweetalert2/sweetalert2.min.js'
            ],
            'toastr' => [
                'css' => ['toastr/toastr.min.css'],
                'js' => ['toastr/toastr.min.js']
            ],
        ]
    ]
    
];
