public class SoccerClub {

    /* Private Attribute */
    private String clubName;
    private String clubOrigin;
    private String clubEst;

    /* Constuctor */
    public SoccerClub(String clubName, String clubOrigin, String clubEst) {
        this.clubName = clubName;
        this.clubOrigin = clubOrigin;
        this.clubEst = clubEst;
    }

    public SoccerClub() {

    }

    /* Setter dan Getter Club Name */
    public void setClubName(String clubName) {
        this.clubName = clubName;
    }

    public String getClubName() {
        return clubName;
    }

    /* Setter dan Getter Club Origin */
    public void setClubOrigin(String clubOrigin) {
        this.clubOrigin = clubOrigin;
    }

    public String getClubOrigin() {
        return clubOrigin;
    }

    /* Setter dan Getter Club Est */
    public void setClubEst(String clubEst) {
        this.clubEst = clubEst;
    }

    public String getClubEst() {
        return clubEst;
    }

}

/* Inherited Class dari class Soccer CLub */
class Player extends SoccerClub {

    /* Private Attribute */
    private String playerName;

    /* Constructor */
    public Player(String playerName) {
        this.playerName = playerName;
    }

    public Player() {

    }

    /* Setter dan Getter Player Name */
    public void setPlayerName(String playerName) {
        this.playerName = playerName;
    }

    public String getPlayerName() {
        return playerName;
    }

    /* Method untuk menampilkan data Player dan Klubnya */
    public void showPlayerData() {
        System.out.println("Club Name : " + this.getClubName());
        System.out.println("Club Origin : " + this.getClubOrigin());
        System.out.println("Club Est : " + this.getClubEst());
        System.out.println("Player Name : " + this.getPlayerName());
    }

}