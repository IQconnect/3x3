<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
    ->addText('shortcode', ['label'=>'Kod mapki'])
    ->addRepeater('tooltips')
        ->addTextarea('content', ['rows' => 3, 'new_lines' => 'br'])
    ->endRepeater();
return $hero;
