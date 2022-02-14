from SoccerClub import Player

#input masukan user untuk data pemain dan klub
inputClubName = str(input("Input club name..."))
inputClubOrigin = str(input("Input club origin..."))
inputClubEst = str(input("Input club est..."))
inputPlayerName = str(input("Input player name..."))

print(" ")

#Pembuatan objek Player serta
#pengisian data dengan menggunakan method set dalam objek Player dan SoccerClub 
player1 = Player()
player1.setClubName(inputClubName)
player1.setClubOrigin(inputClubOrigin)
player1.setClubEst(inputClubEst)
player1.setPlayerName(inputPlayerName)

#Method dalam objek Player untuk menampilkan data Player (beserta klubnya)
player1.showPlayerData()