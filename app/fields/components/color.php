<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$color = new FieldsBuilder('color');

$color
->addSelect('scolor', ['label'=>'Kolor sekcji'])
	->addChoices(['white' => 'Biały'], ['black' => 'Czarny']);
return $color;
