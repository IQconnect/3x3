<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$maingallery = new FieldsBuilder('maingallery',['label' => 'Główna Galleria']);

$maingallery
	->addFields(get_field_partial('components.color'))
	->addFields(get_field_partial('components.headline'))
    ->addFields(get_field_partial('components.text-info'))
    ->addGallery('gallerymain', ['title'=>'Galeria'])
    ;
return $maingallery;
