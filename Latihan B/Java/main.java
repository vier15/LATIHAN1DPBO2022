import java.util.*;

public class main {

    public static void main(String[] args) {

        /* Deklarasi variabel tampungan input */
        String inputClubName = "";
        String inputClubOrigin = "";
        String inputClubEst = "";
        String inputPlayerName = "";

        /* Deklarasi scanner untuk input */
        Scanner sc = new Scanner(System.in);

        /* Inputting */
        System.out.print("Input Club Name... ");
        try{
                inputClubName = sc.next();
        }catch(Exception e){}

        System.out.print("Input Club Origin... ");
        try{
                inputClubOrigin = sc.next();
        }catch(Exception e){}

        System.out.print("Input Club Est... ");
        try{
                inputClubEst = sc.next();
        }catch(Exception e){}
        
        System.out.print("Input Player Name... ");
        try{
                inputPlayerName = sc.next();
        }catch(Exception e){}

        System.out.println(" ");
        
        /* Deklarasi objek Player baru bernama player1 */
        Player player1 = new Player();

        /* Inisalisasi dengan method Setter sesuai dengan input */
        player1.setClubName(inputClubName);
        player1.setClubOrigin(inputClubOrigin);
        player1.setClubEst(inputClubEst);
        player1.setPlayerName(inputPlayerName);

        /* Tampilkan data Plyaer dan Klubnya */
        player1.showPlayerData();

    }

}