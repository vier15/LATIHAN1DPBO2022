<?php

include "SoccerClub.php";

/* Pembuatan class Player baru bernama player1 beserta inisialisasinya */
$player1 = new Player();
$player1->setClubName("Rhodes Island");
$player1->setClubOrigin("Rim Billiton");
$player1->setClubEst("2001");
$player1->setPlayerName("VieR");

/* Tampilkan data player1 */
$player1->showPlayerData();

echo "<br />";

/* Pembuatan class Player baru bernama player2 beserta inisialisasinya */
$player2 = new Player();
$player2->setClubName("Penguin Logistic");
$player2->setClubOrigin("Lungmen");
$player2->setClubEst("2020");
$player2->setPlayerName("Exusia");

/* Tampilkan data player2 */
$player2->showPlayerData();

?>