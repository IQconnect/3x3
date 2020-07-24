<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$content = new FieldsBuilder('content', ['label' => 'Treść']);
$content
	->addTab('Tekst wpisu', ['placement' => 'left']);
return $content;
