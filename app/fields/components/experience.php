<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$experience = new FieldsBuilder('experience', ['label' => 'Doświadczenie']);

$experience
    ->addFields(get_field_partial('components.title'))
    ->addRepeater('experience', ['min' => 0, 'layout' => 'block', 'label' => 'Doświadczenie'])
      ->addText('date', ['label' => 'Data'])
      ->addTextarea('desc', ['rows' => '3', 'label' => 'Opis'])
      ->addGallery('gallery')
    ->endRepeater()
    ->addPageLink('link', ['post_type' => 'page', 'allow_null' => 1])
    ->addTrueFalse('light', ['label'=>'Białe tło', 'default_value' => 0]);

return $experience;