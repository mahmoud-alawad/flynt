<?php

namespace Flynt\Components\BlockImageText;

use Flynt\Features\Components\Component;

add_filter('Flynt/addComponentData?name=BlockImageText', function ($data) {
    add_action('wp_enqueue_scripts', function () {
        Component::enqueueAssets('BlockImageText');
    });

    return $data;
});