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
            'name' => 'app.menu.operations',
            'route_name' => 'particular.session.login.get',
            'icon' => null,
        ],
        [
            'name' => 'app.menu.operations',
            'route_name' => null,
            'icon' => null,
            'children' => [
                [
                    'name' => 'app.submenu.jibi',
                    'route_name' => null,
                    'icon' => null,
                    'children' => [
                        [
                            'name' => 'app.under_submenu.subscribe_to_an_account',
                            'route_name' => 'operation.jibi.subscription',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.under_submenu.recharge_jibi',
                            'route_name' => 'operation.jibi.recharge',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.under_submenu.accounts_jibi',
                            'route_name' => 'operation.jibi.accounts',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.under_submenu.monitoring_jibi_recharge',
                            'route_name' => 'operation.jibi.monitoring',
                            'icon' => null,
                        ],
                    ],
                ],
                [
                    'name' => 'app.submenu.transfer',
                    'route_name' => null,
                    'icon' => null,
                    'children' => [
                        [
                            'name' => 'app.under_submenu.make_transfer',
                            'route_name' => 'operation.transfer.add',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.under_submenu.monitoring_transfer',
                            'route_name' => 'operation.transfer.monitoring',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.under_submenu.permanent_transfer',
                            'route_name' => 'operation.transfer.permanent',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.under_submenu.beneficiary_management_transfer',
                            'route_name' => 'operation.transfer.beneficiary_management',
                            'icon' => null,
                        ],
                    ],
                ],
                [
                    'name' => 'app.submenu.card_recharge',
                    'route_name' => null,
                    'icon' => null,
                    'children' => [
                        [
                            'name' => 'app.under_submenu.make_recharge',
                            'route_name' => 'operation.card.make_recharge',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.under_submenu.card_monitoring',
                            'route_name' => 'operation.card.monitoring',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.under_submenu.rechargeable_management',
                            'route_name' => 'operation.card.card_management',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.under_submenu.add_rechargeable',
                            'route_name' => 'operation.card.add_rechargeable',
                            'icon' => null,
                        ],
                    ],
                ],
                [
                    'name' => 'app.submenu.cash_express_auto',
                    'route_name' => null,
                    'icon' => null,
                    'children' => [
                        [
                            'name' => 'app.under_submenu.add_provision',
                            'route_name' => 'operation.cash_express.add_provision',
                            'icon' => null,
                        ],
                        [
                            'name' => 'app.under_submenu.provision_monitoring',
                            'route_name' => 'operation.cash_express.monitoring',
                            'icon' => null,
                        ],
                    ],
                ],
            ],
        ],
        [
            'name' => 'app.menu.setting',
            'route_name' => null,
            'icon' => null,
            'children' => [
                [
                    'name' => 'app.submenu.profile',
                    'route_name' => 'setting.profile',
                    'icon' => null,
                    'children' => [
                    ],
                ],
                [
                    'name' => 'app.submenu.accounts',
                    'route_name' => 'setting.accounts',
                    'icon' => null,
                    'children' => [
                    ],
                ],
                [
                    'name' => 'app.submenu.electronic_report',
                    'route_name' => 'setting.electronic_report',
                    'icon' => null,
                    'children' => [
                    ],
                ],
                [
                    'name' => 'app.submenu.notifications',
                    'route_name' => 'setting.notifications',
                    'icon' => null,
                    'children' => [
                    ],
                ],
                [
                    'name' => 'app.submenu.password',
                    'route_name' => 'setting.password',
                    'icon' => null,
                    'children' => [
                    ],
                ],
            ],
        ],
    ],

    'setting' => [
        [
            'title' => 'app.setting.menu.profile',
            'sub_title' => 'app.setting.menu.profile_subtitle',
            'route_name' => 'setting.profile',
            'icon' => 'fas fa-address-card',
        ],
        [
            'title' => 'app.setting.menu.accounts',
            'sub_title' => 'app.setting.menu.accounts_subtitle',
            'route_name' => 'setting.accounts',
            'icon' => 'fas fa-calculator',
        ],
        [
            'title' => 'app.setting.menu.electronic_report_title',
            'sub_title' => 'app.setting.menu.accounts_subtitle',
            'route_name' => 'setting.electronic_report',
            'icon' => 'far fa-file-alt',
        ],
        [
            'title' => 'app.setting.menu.notifications_title',
            'sub_title' => 'app.setting.menu.notifications_subtitle',
            'route_name' => 'setting.notifications',
            'icon' => 'fas fa-bell',
        ],
        [
            'title' => 'app.setting.menu.password_title',
            'sub_title' => 'app.setting.menu.password_subtitle',
            'route_name' => 'setting.password',
            'icon' => 'fas fa-lock',
        ],
    ],

];