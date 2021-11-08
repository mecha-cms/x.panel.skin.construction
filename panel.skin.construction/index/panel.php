<?php

$_['is']['dark'] = false;
$_['is']['light'] = true;

// Add this skin
$_['skin']['construction'] = [
    'title' => 'Construction',
    'path' => stream_resolve_include_path(__DIR__ . DS . '..' . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'index' . (defined('DEBUG') && DEBUG ? '.' : '.min.') . 'css')
];

// Add `is:main` class to the folder and link menu
$_['lot']['bar']['lot'][0]['lot']['folder']['tags']['is:main'] = true;
$_['lot']['bar']['lot'][0]['lot']['link']['tags']['is:main'] = true;