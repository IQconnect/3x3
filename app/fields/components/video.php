<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$video = new FieldsBuilder('video');

$video
	->addFields(get_field_partial('components.color'))
	->addFields(get_field_partial('components.headline'))
    ->addText('shortcode', ['label'=>'Kod Youtube']);
return $video;
