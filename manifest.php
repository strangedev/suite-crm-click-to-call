<?php

$manifest = array(
    'acceptable_sugar_versions' => array(
        'exact_matches' => array(
            1 => '6.5.15'
        ),
        'regex_matches' => array(
            1 => '6\.4\.\d',
            2 => '6\.[0-9]\.\d',
            3 => '7\.[0-9]\.\d'
        )
    ),
    'acceptable_sugar_flavors' => array(
        'CE',
        'PRO',
        'ENT',
        'CORP'
    ),
    'readme' => '',
    'key' => '',
    'author' => '',
    'description' => 'SuiteCRM Click to Call, using the tel:// protocol',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'SuiteCRM Click to Call',
    'published_date' => 'December 29, 2018',
    'type' => 'module',
    'version' => 'v0.0.1',
    'remove_tables' => false
);

$installdefs = array(
    'id' => 'ClickToCall',
    'copy' => array(
        0 => array(
            'from' => '<basepath>/SugarModules/modules/ClickToCall',
            'to' => 'modules/ClickToCall'
        )
    ),
    'mkdir' => array(),
    'administration' => array(),
    'custom_fields' => array(),
    'logic_hooks' => array(
        array(
            'module' => '',
            'hook' => 'after_ui_footer',
            'order' => 99,
            'description' => 'SuiteCRM Click to Call',
            'file' => 'modules/ClickToCall/LoadCallerButton.php',
            'class' => 'LoadCallerButton',
            'function' => 'loadCallerButton'
        )
    )
);

$upgrade_manifest = array();
