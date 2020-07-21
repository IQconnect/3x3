<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$news = new FieldsBuilder('news', ['label' => 'Aktualności']);

$news

->addFields(get_field_partial('components.headline'));

return $news;
