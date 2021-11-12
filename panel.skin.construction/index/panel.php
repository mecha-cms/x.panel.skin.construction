<?php

// Add `is:main` class to the folder and link menu
$_['lot']['bar']['lot'][0]['lot']['folder']['tags']['is:main'] = true;
$_['lot']['bar']['lot'][0]['lot']['link']['tags']['is:main'] = true;

$skin = $state->x->panel->skin ?? 'construction';

// Add `construction` skin option
if ('.state' === $_['path'] && 'g' === $_['task']) {
    $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['panel']['lot']['fields']['lot']['skin'] = [
        'name' => 'state[x][panel][skin]',
        'type' => 'option',
        'value' => $skin,
        'lot' => [
            'construction' => 'Construction'
        ],
        'stack' => 30
    ];
}

// Load asset if current `skin` value is `construction`
if ('construction' === $skin) {
    $_['asset']['panel.skin.' . $skin] = [
        'id' => false,
        'path' => stream_resolve_include_path(__DIR__ . DS . '..' . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'index' . (defined('DEBUG') && DEBUG ? '.' : '.min.') . 'css'),
        'stack' => 30
    ];
    $_['is']['light'] = true;
}