<?php
include 'Comparable.php';
include 'iSport.php';
include 'Club.php';
include 'sport.php';
include 'SportBallon.php';
include 'SportRelais.php';



$club = array();
$club[1] = new Club(1, "Dijon", 63);
$club[2] = new Club(2, "PSG", 67);
$club[3] = new Club(3, "Nantes", 65);

$sb = new SportBallon("Basketball", 5, 35, 45);
$club[1]->AjouterSport($sb);

$sport1 = new Sport("Javelot", 1);
$sport2 = new Sport("Judo", 1);
$sportBallon1 = new SportBallon("Football", 11, 68, 105);
$sportBallon2 = new SportBallon("Handball", 7, 35, 65);
$sportRelais1 = new SportRelais("4 * 100", 400, 4);
$club[2]->AjouterSport($sport1);
$club[2]->AjouterSport($sport2);
$club[2]->AjouterSport($sportBallon1);
$club[2]->AjouterSport($sportBallon2);
$club[2]->AjouterSport($sportRelais1);

$sport3 = new Sport("Cyclisme", 1);
$sportBallon3 = new SportBallon("Football", 11, 68, 105);
$sportBallon4 = new SportBallon("Rugby", 15, 65, 115);
$sportRelais2 = new SportRelais("100m", 100, 1);
$club[3]->AjouterSport($sport3);
$club[3]->AjouterSport($sportBallon3);
$club[3]->AjouterSport($sportBallon4);
$club[3]->AjouterSport($sportRelais2);

echo '<h2>LISTE DES CLUBS</h2><a href=index.php> Accueil</a><br>';
foreach ($club as $keyClub => $valueClub){
    echo "<a href=index.php?id={$keyClub}>{$keyClub} - {$valueClub->getNomClub()} {$valueClub->getNbPoints()}</a><br>";
}
if (isset($_GET['id'])) {
    echo '<h2>Liste des sports de '.$club[$_GET['id']]->getNomClub().'</h2>';
    $sp1 = $club[$_GET['id']]->getLesSports();
    foreach ($sp1 as $keySp1 => $valueSp1){
        echo $valueSp1->getDescription();
    }
}