<?php

class SoccerClub {

    /* Public Attribute (agar dapat diubah oleh class child) */
    public $clubName = "Club Name";
    public $clubOrigin = "Club Origin";
    public $clubEst = "0000";

    /* Constructor */
    public function __construct($clubName = "Club Name", $clubOrigin = "Club Origin", $clubEst = "0000") {
        $this->clubName = $clubName;
        $this->clubOrigin = $clubOrigin;
        $this->clubEst = $clubEst;
    }

    /* Setter dan Getter Club Name */
    public function setClubName($clubName) {
        $this->clubName = $clubName;
    }

    public function getClubName() {
        return $this->clubName;
    }

    /* Setter dan Getter Club Origin */
    public function setClubOrigin($clubOrigin) {
        $this->clubOrigin = $clubOrigin;
    }

    public function getClubOrigin() {
        return $this->clubOrigin;
    }

    /* Setter dan Getter Club Est */
    public function setClubEst($clubEst) {
        $this->clubEst = $clubEst;
    }

    public function getclubEst() {
        return $this->clubEst;
    }

    /* Destructor */
    public function __destruct() {

	}

}

/* Inherited Class dari class SoccerClub */
class Player extends SoccerClub {

    /* Private Attribute */
    private $playerName = "Player Name";

    /* Constructor */
    public function __construct($clubName = "Club Name", $clubOrigin = "Club Origin", $clubEst = "0000", $playerName = "Player Name") {
        $this->clubName = $clubName;
        $this->clubOrigin = $clubOrigin;
        $this->clubEst = $clubEst;
        $this->playerName = $playerName;
    }

    /* Setter dan Getter Player Name */
    public function setPlayerName($playerName) {
        $this->playerName = $playerName;
    }

    public function getPlayerName() {
        return $this->playerName;
    }

    /* Method untuk menampilkan data Player dan Klubnya */
    public function showPlayerData() {
        echo "Club Name : $this->clubName <br />
              Club Origin : $this->clubOrigin <br />
              Club Est : $this->clubEst <br />
              Player Name : $this->playerName <br />";
    }

    /* Destructor */
    public function __destruct() {

	}

}

?>