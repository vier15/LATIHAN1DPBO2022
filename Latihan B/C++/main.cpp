#include "SoccerClub.cpp"

int main() {

    /* Variabel penampu input */
    string inputClubName;
    string inputClubOrigin;
    string inputClubEst;
    string inputPlayerName;

    /* Inputting */
    cout << "Input Club Name... ";
    cin >> inputClubName;

    cout << "Input Club Origin... ";
    cin >> inputClubOrigin;

    cout << "Input Club Est... ";
    cin >> inputClubEst;

    cout << "Input Player Name... ";
    cin >> inputPlayerName;

    /* Deklarasi objek Player dengan nama player1 beserta inisialisasinya berdasarkan input */
    Player player1;
    player1.setClubName(inputClubName);
    player1.setClubOrigin(inputClubOrigin);
    player1.setClubEst(inputClubEst);
    player1.setPlayerName(inputPlayerName);

    /* Menampilkan data Player */
    player1.showPlayerData();

    return 0;
}

