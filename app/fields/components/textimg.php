<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$textimg = new FieldsBuilder('textimg',['label' => 'Tekst ze zdjęciami']);

$textimg
		->addText('titletext', ['label' => 'Tytuł koło zdjęcia'])
		->addWysiwyg('subtext', ['label' => 'Tekst pod tytułem'])
		->addWysiwyg('maintext', ['label' => 'Tekst koło zdjęcia'])
		->addImage('imgup', ['label' => 'Małe zdjecie na górze'])
		->addImage('imgdown', ['label' => 'Małe zdjecie na dole'])
		->addImage('imglong', ['label' => 'Duże zdjęcie']);
return $textimg;
