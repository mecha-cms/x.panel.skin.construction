<?php

// Disable this extension if `panel.skin` extension is disabled or removed ;)
if (!isset($state->x->{'panel.skin'})) {
    return $_;
}

$name = $state->x->panel->skin->name ?? "";

// Load asset if current `skin` value is `construction`
if ('construction' === $name) {
    $_['asset']['panel.skin.' . $name] = [
        'id' => false,
        'path' => stream_resolve_include_path(__DIR__ . D . '..' . D . 'index' . (defined('TEST') && TEST ? '.' : '.min.') . 'css'),
        'stack' => 30
    ];
    $_['is']['dark'] = false;
    $_['is']['light'] = true;
}

// Add `construction` skin to skin name selector
if ('.state' === $_['path'] && 'get' === $_['task']) {
    $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['panel']['lot']['fields']['lot']['skin']['lot']['construction'] = 'Construction';
}

return $_;