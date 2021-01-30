<?php

// Disable the automatic syntax highlighter theme loader
State::let('x.highlight.skin');

$_['is']['dark'] = false;
$_['is']['light'] = true;

$_['not']['dark'] = true;
$_['not']['light'] = false;

// Add this theme
$_['asset']['panel.skin.construction'] = [
    'path' => stream_resolve_include_path(__DIR__ . DS . '..' . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'index' . (defined('DEBUG') && DEBUG ? '.' : '.min.') . 'css'),
    'stack' => 20.1
];

// Remove the default theme
$_['asset']['panel.skin.dark'] = [
    'skip' => true
];

// Add `is:main` class to the folder and link menu
$_['lot']['bar']['lot'][0]['lot']['folder']['tags']['is:main'] = true;
$_['lot']['bar']['lot'][0]['lot']['link']['tags']['is:main'] = true;
