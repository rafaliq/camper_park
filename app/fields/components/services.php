<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$services = new FieldsBuilder('services', ['label' => 'Usługi']);

$services
    ->addRepeater('services', ['min' => 0, 'layout' => 'block', 'label' => 'Usługa'])
      ->addText('header', ['label' => 'Tytuł'])
      ->addTextarea('desc', ['rows' => '3', 'label' => 'Opis'])
      ->addPageLink('link', ['type' => 'page_link', ['label' => 'Link']]);

return $services;