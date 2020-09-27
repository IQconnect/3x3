<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$media = new FieldsBuilder('media',['label' => 'Media']);

$media
	->addFields(get_field_partial('components.color'))
	->addFields(get_field_partial('components.headline'))
	->addRepeater('mediabutton',['label' => 'Dodaj przycisk'])
		->addImage('imgmedia', ['label' => 'Zdjecie w tle'])
		->addText('textmedia', ['label' => 'Tekst przycisku'])
		->addLink('linkmedia', ['label'=>'Adres pierwszego przycisku'])
->endRepeater();
return $media;
