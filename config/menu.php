<?php

return [

    /*
    |--------------------------------------------------------------------------
    | The custom app menu
    |--------------------------------------------------------------------------
    |
    */

    'guest' => [
        [
            'name' => 'app.menu.particular',
            'route_name' => 'particular.session.login.get',
            'icon' => null,
        ],
        [
            'name' => 'app.menu.company',
            'route_name' => 'company.session.login.get',
            'icon' => null,
        ],
    ],

    'particular' => [
        [
            'name' => 'app.menu.particular',
            'route_name' => 'particular.session.login.get',
            'icon' => null,
        ],
        [
            'name' => 'app.menu.company',
            'route_name' => null,
            'icon' => null,
            'children' => [
                [
                    'name' => 'app.menu.item1',
                    'route_name' => null,
                    'icon' => null,
                    'children' => [
                        [
                            'name' => 'app.menu.particular',
                            'route_name' => 'particular.session.login.get',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.menu.particular',
                            'route_name' => 'particular.session.login.get',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.menu.particular',
                            'route_name' => 'particular.session.login.get',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.menu.particular',
                            'route_name' => 'particular.session.login.get',
                            'icon' => null,
                        ],
                    ],
                ],
            ],
        ],
    ],

    'setting' => [
        [
            'title' => '',
            'sub_title' => '',
            'route_name' => '',
            'icon' => null,
        ],
    ],

];