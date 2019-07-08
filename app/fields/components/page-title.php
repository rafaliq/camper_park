<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$pageTitle = new FieldsBuilder('pageTitle', ['label' => 'Nagłówek']);

return $pageTitle;