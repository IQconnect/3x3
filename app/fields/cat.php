<?php
namespace App;
use StoutLogic\AcfBuilder\FieldsBuilder;
$cat = new FieldsBuilder('cat');
$cat
    ->setLocation('taxonomy', '==', 'category');

$cat
    ->addTab('Ustawienia główne', ['placement' => 'left'])
        ->addImage('thumbnail')
        ->addFile('page');
return $cat;
