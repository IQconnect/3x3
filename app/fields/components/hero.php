<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
    ->addFields(get_field_partial('components.color'))
    ->addText('shortcode', ['label'=>'Kod mapki'])
    ->addRepeater('tooltips')
        ->addTextarea('content', ['rows' => 3, 'new_lines' => 'br'])
    ->endRepeater();
return $hero;
