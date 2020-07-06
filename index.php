<?php

require_once 'entities/Medecin.class.php';
require_once 'entities/RendezVous.class.php';

function afficheMedecin($medecin)
{
    echo $medecin->getIdMedecin() . " " . $medecin->getNomMedecin() . " " . $medecin->getPrenomMedecin() . " " . $medecin->getAdresseMedecin() . " " . $medecin->getEmailMedecin() . " " . $medecin->getTelMedecin();
}

//Instanciation de la classe Medecin
$medecin1 = new Medecin();
$medecin1->setIdMedecin(1);
$medecin1->setNomMedecin('DIALLO');
$medecin1->setPrenomMedecin('ISMAILA');
$medecin1->setAdresseMedecin('Paris');
$medecin1->setEmailMedecin('lolo.lodia@gmail.com');
$medecin1->setTelMedecin('0645231790');

afficheMedecin($medecin1);
echo "<br><br><br>";

$medecin2 = new Medecin(2, 'SIBY', 'KHADYJA', 'CHOISY LE ROI', 'siby.mignonne@hotmail.com', '0769495167');

afficheMedecin($medecin2);
echo "<br><br><br><br><br><br><br>";

// Instanciation de la classe RendezVous
$rv1 = new RendezVous(1, '28/03/2021', 'Non Urgent', $medecin2);

echo $rv1->getId() . " - " . $rv1->getdate() . " - " . $rv1->getComment();
afficheMedecin($rv1->getMedecin());
echo "<br><br><br>";

$rv2 = new RendezVous();
$rv2->setId(2);
$rv2->setDate('30/08/2020');
$rv2->setComment('URGENT');
$rv2->setMedecin($medecin1);

echo $rv2->getId() . " - " . $rv2->getdate() . " - " . $rv2->getComment() . " - " . $rv2->getMedecin()->getNomMedecin();
//afficheMedecin($rv2->getMedecin());
echo "<br><br><br>";
