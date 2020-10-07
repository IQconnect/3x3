<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');

$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addText('facebook' , ['label' =>'Adress Facebooka'])
        ->addText('instagram' , ['label' =>'Adress Instagrama'])
        ->addImage('logo', ['wrapper'=>['width'=>'33%'],'label' => 'Logo w menu'])
        ->addImage('heroimage', ['wrapper'=>['width'=>'33%'],'label' => 'Logo w wersji mobilnej'])
    ->addTab('Gracze', ['placement' => 'left'])
    ->addRepeater('modal')
    ->addGroup('player')
      ->addImage('image', ['label' => 'Zdjęcie', 'wrapper' => ['width' => '80%']])
      ->addText('name', ['label' => 'Imię i nazwisko', 'wrapper' => ['width' => '30%']])
      ->addText('nick', ['label' => 'Ksywa', 'wrapper' => ['width' => '30%']])
      ->addText('number', ['label' => 'Numer', 'wrapper' => ['width' => '30%']])
      ->addText('wzrost', ['label' => 'Wzrost', 'wrapper' => ['width' => '30%']])
      ->addText('club', ['label' => 'Klub', 'wrapper' => ['width' => '30%']])
      ->addText('position', ['label' => 'Pozycja', 'wrapper' => ['width' => '30%']])
      ->addWysiwyg('best', ['label' => 'Największe osiągnięcie', 'wrapper' => ['width' => '30%']])
      ->addText('rw', ['label' => 'Rzuty wolne', 'wrapper' => ['width' => '30%']])
      ->addText('pt2', ['label' => 'Rzuty za 2', 'wrapper' => ['width' => '30%']])
      ->addText('pt3', ['label' => 'Rzuty za 3', 'wrapper' => ['width' => '30%']])
      ->addText('zb', ['label' => 'Zbiórki', 'wrapper' => ['width' => '30%']])
      ->addText('pr', ['label' => 'Przechwyty', 'wrapper' => ['width' => '30%']])
      ->addText('as', ['label' => 'Asysty', 'wrapper' => ['width' => '30%']])
      ->addText('bl', ['label' => 'Bloki', 'wrapper' => ['width' => '30%']])
    ->endRepeater()
    ->addTab('Gracze mobilka', ['placement' => 'left'])
        ->addRepeater('modalmobile')
            ->addImage('imagealt', ['label' => 'Zdjęcie w mobilce', 'wrapper' => ['width' => '80%']])
            ->addText('mobileid', ['label' => 'Podać miejsce na zdjęciu np. 4 (to HICKS)', 'wrapper' => ['width' => '80%']])
        ->endRepeater()
    ->addTab('Stopka', ['placement' => 'left'])
        ->addText('titlefooter' , ['label' =>'Tytuł dla stopki'])
        ->addSelect('scolor', ['label'=>'Kolor sekcji'])
	->addChoices(['white' => 'Biały'], ['black' => 'Czarny'])
        ->addImage('brand', ['wrapper'=>['width'=>'33%'],'label' => 'Logo w stopce'])
        ->addText('followtext' , ['label' =>'Tekst do social'])
        ->addWysiwyg('info',['label' => 'Tekst w Stopce', 'media_upload' => 0])
        ->addWysiwyg('copyright',['label' => 'Tekst w Stopce Copyright', 'media_upload' => 0])
        ->addImage('iqlogo', ['label' => 'Wykonanie'])
    ;


return $option_page;
