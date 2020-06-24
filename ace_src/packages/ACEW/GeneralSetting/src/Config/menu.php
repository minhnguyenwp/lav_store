<?php

return [
    [
        'key' => 'acesettings',          // uniquely defined key for menu-icon
        'name' => 'Theme Settings',        //  name of menu-icon
        'route' => 'generalsetting.admin.index',  // the route for your menu-icon
        'sort' => 10,                    // Sort number on which your menu-icon should display
        'icon-class' => 'dashboard-icon',   //class of menu-icon
    ], [
        'key'        => 'acesettings.general',
        'name'       => 'General',
        'route'      => 'generalsetting.admin.index',
        'sort'       => 1,
        'icon-class' => '',
    ],
    [
        'key'        => 'acesettings.salepolicy',
        'name'       => 'Sale Policy in Home',
        'route'      => 'salepolicy.admin.index',
        'sort'       => 2,
        'icon-class' => '',
    ],
];