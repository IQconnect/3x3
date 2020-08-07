<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$calendar = new FieldsBuilder('calendar', ['label' => 'Kalendarz']);

$calendar

->addFields(get_field_partial('components.color'))
->addFields(get_field_partial('components.headline'))
->addFields(get_field_partial('components.more'));



return $calendar;
