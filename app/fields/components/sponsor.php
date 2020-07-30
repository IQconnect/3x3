<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$sponsor= new FieldsBuilder('sponsor',['label' => 'Sponsorzy']);

$sponsor
->addFields(get_field_partial('components.color'))
->addFields(get_field_partial('components.headline'))
	->addRepeater('sinfo')
	->addText('sponsortitle', ['label' => 'Tytuł'])
	->addWysiwyg('sponsortext', ['label' => 'Tekst koło zdjęcia'])
	->addImage('sponsorimg', ['label' => 'Zdjecie'])
	->addLink('sponsorlink', ['label' => 'Link do strony'])
	->endRepeater();
return $sponsor;
