<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$headline = new FieldsBuilder('headline');

$headline
	->addText('headline', ['label'=>'Tytuł sekcji']);
return $headline;
