#include <string>
#include <iostream>

using namespace std;

class SoccerClub {

    /* Private Attribute */
    private:

        string clubName;
        string clubOrigin;
        string clubEst;

    /* Public Attribute and Method */
    public:

        /* Constructor */
        SoccerClub() {
            this->clubName = "Club Name";
            this->clubOrigin = "Club Origin";
            this->clubEst = "Club Est";
        }

        /* Setter dan Getter Club Name */
        void setClubName(string clubName) {
            this->clubName = clubName;
        }

        string getClubName() {
            return this->clubName;
        }

        /* Setter dan Getter Club Origin */
        void setClubOrigin(string clubOrigin) {
            this->clubOrigin = clubOrigin;
        }

        string getClubOrigin() {
            return this->clubOrigin;
        }

        /* Setter dan Getter Club Est */
        void setClubEst(string clubEst) {
            this->clubEst = clubEst;
        }

        string getClubEst() {
            return this->clubEst;
        }

        /* Destructor */
        ~SoccerClub() {

        }

};

/* Inherited Class dari class Soccer Club */
class Player: public SoccerClub {

    /* Private Attribute */
    private:

        string playerName;

    /* Public Attribute and Method */
    public:

        /* Constructor */
        Player() {
            this->playerName = "Player Name";
        }

        /* Setter dan Getter Player Name */
        void setPlayerName(string playerName) {
            this->playerName = playerName;
        }

        string getPlayerName() {
            return this->playerName;
        }

        /* Method untuk menampilkan data Player dan Club */
        void showPlayerData() {
            cout << "\nClub Name : " << this->getClubName();
            cout << "\nClub Origin : " << this->getClubOrigin();
            cout << "\nClub Est : " << this->getClubEst();
            cout << "\nPlayer Name : " << this->getPlayerName();
        }

        /* Destructor */
        ~Player() {


        }

};
