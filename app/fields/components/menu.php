<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$menu = new FieldsBuilder('menu');

$menu
		->addText('titlemenu', ['label' => 'Menu'])
		->addText('buttonmenu', ['label' => 'Tekst w przycisku'])
		->addFile('buttonurl', ['label' => 'Tekst w przycisku'])
		->addTaxonomy('categorymenu', ['label' => 'Kategorie menu']);
return $menu;
