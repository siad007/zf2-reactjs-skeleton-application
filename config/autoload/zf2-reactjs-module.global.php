<?php
// eval $("C:\Program Files\Docker Toolbox\docker-machine.exe" env)
return [
    'zf2reactjsmodule' => [
        'react_path' => __DIR__ . '/../../public/js/react/react.min.js',        // required
        'components_path' => __DIR__ . '/../../public/js/components/table.js',   // required
        'render_method' => 'v8js', // or 'external'
        'render_url' => '',
        'renderer' => '',
        'client' => '',
        'external_adapter' => '',
        'v8js_adapter' => ''
    ],
];
