<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$post = new FieldsBuilder('post');

$post
    ->setLocation('post_type', '==', 'post');

$post
    ->addTab('datawpisu', ['placement' => 'left'])
        ->addText('dayname', ['label'=>'Nazwa dnia'])
        ->addText('day', ['label'=>'Dzień'])
        ->addText('month', ['label'=>'Miesiąc'])
        ->addText('year', ['label'=>'Rok'])
         ->addFields(get_field_partial('partials.builder'));
return $post;
