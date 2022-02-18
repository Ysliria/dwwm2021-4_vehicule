<?php

require_once 'Voiture.php';
require_once 'Roue.php';
require_once 'Vehicule.php';

$roue    = new Roue(16, 'pirelli');
$voiture = new Voiture(4, 130, 'essence', 'bleu', false, $roue);

var_dump($voiture);