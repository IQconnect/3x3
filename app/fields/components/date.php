<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$date = new FieldsBuilder('date');

$date
->addTab('Data wpisu', ['placement' => 'left'])
	->addText('dayname', ['label'=>'Nazwa dnia'])
	->addText('day', ['label'=>'Dzień'])
	->addText('month', ['label'=>'Miesiąc'])
	->addText('year', ['label'=>'Rok']);
return $date;
