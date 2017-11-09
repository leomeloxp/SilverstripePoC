<?php

namespace MySite\Admin;

use MySite\Models\MyObj;
use SilverStripe\Admin\ModelAdmin;

class AppContentAdmin extends ModelAdmin
{
    private static $managed_models = [
        MyObj::class => [
            'title' => 'MyObj'
        ],
    ];

    private static $url_segment = 'example';

    private static $menu_title = 'Example';

    private static $menu_priority = 1;
}
