class SoccerClub():

    #private attributs
    __clubName = "Club Name"
    __clubOrigin = "Club Origin"
    __clubEst = "0000"

    #Constructor
    def __init__(self, clubName = "Club Name", clubOrigin = "Club Origin", clubEst = "Club Est"):
        self.__clubName = clubName
        self.__clubOrigin = clubOrigin
        self.__clubEst = clubEst

    #Setter dan Getter Nama Club
    def setClubName(self, clubName):
        self.__clubName = clubName

    def getClubName(self):
        return self.__clubName

    #Setter dan Getter Club Origin
    def setClubOrigin(self, clubOrigin):
        self.__clubOrigin = clubOrigin

    def getClubOrigin(self):
        return self.__clubOrigin

    #Setter dan Getter Club Est
    def setClubEst(self, clubEst):
        self.__clubEst = clubEst

    def getClubEst(self):
        return self.__clubEst

#Inherited Class dari Soccer Club
class Player(SoccerClub):

    #private attributes
    __playerName = "Player Name"

    #Constructor
    def __init__(self, playerName = "Player Name"):
        self.__playerName = playerName
    
    #Setter dan Getter Player Name
    def setPlayerName(self, playerName):
        self.__playerName = playerName

    def getPlayerName(self):
        return self.__playerName

    #Method untuk menampilkan data Player beserta Klubnya
    def showPlayerData(self):
        print("Club Name : " + str(self.getClubName()))
        print("Club Origin : " + str(self.getClubOrigin()))
        print("Club Est : " + str(self.getClubEst()))
        print("Player Name : " + str(self.getPlayerName()))
