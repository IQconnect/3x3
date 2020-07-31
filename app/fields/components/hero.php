<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
    ->addFields(get_field_partial('components.color'))
    ->addText('shortcode', ['label'=>'Kod mapki']);
return $hero;
