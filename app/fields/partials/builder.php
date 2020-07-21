<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Add Component'])
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.modal'))
            ->addLayout(get_field_partial('components.textimg'))
            ->addLayout(get_field_partial('components.news'))
            ->addLayout(get_field_partial('components.gallery'))
            ->addLayout(get_field_partial('components.menu'))
            ->addLayout('content')
    ;
return $builder;
