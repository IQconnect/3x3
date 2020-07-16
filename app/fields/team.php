<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$team = new FieldsBuilder('team');

$team
    ->setLocation('post_type', '==', 'team');

$team
        ->addFields(get_field_partial('partials.builder'))
        ->addTab('Zdjecie', ['placement' => 'left'])
            ->addImage('photo', ['label'=>'Zdjęcie zawodnika'])
        ->addTab('Informacje', ['placement' => 'left'])
            ->addText('name', ['label' => 'Imie Nazwisko'])
            ->addText('nick', ['label' => 'Ksywa'])
            ->addText('number', ['label' => 'Numer'])
            ->addText('club', ['label' => 'Klub'])
            ->addText('position', ['label' => 'Pozycja'])
            ->addText('achivement', ['label' => 'Największe osiągniecie'])
        ->addTab('Statystki', ['placement' => 'left']);

return $team;
