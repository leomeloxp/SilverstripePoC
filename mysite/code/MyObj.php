<?php

namespace MySite\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class MyObj extends DataObject
{
    private static $db = [
        'Prop1' => 'Varchar',
        'Prop2' => 'Varchar',
        'Prop3' => 'HTMLText'
    ];

    private static $extensions = [
        Versioned::class
    ];
}
