package backEnd;

public class Gara {
    public boolean fineGara(int roundFatti, int round) {
        return roundFatti < round;
    }

    public String round(Giocatore giocatore1, Giocatore giocatore2, int lancio1, int lancio2) {
        if (lancio1 > lancio2) {
            return giocatore1.getNome() + " ha vinto il round con " + lancio1;
        } else if (lancio1 < lancio2) {
            return giocatore2.getNome() + " ha vinto il round con " + lancio2;
        } else {
            return "Round in parità con " + lancio1;
        }
    }

    public void vincitoreRound(Giocatore giocatore1, Giocatore giocatore2, int lancio1, int lancio2) {
        if (lancio1 > lancio2) {
            giocatore1.incrementaVittorie();
        } else if (lancio1 < lancio2) {
            giocatore2.incrementaVittorie();
        }
        // Nessun incremento in caso di parità
    }

    public String gameWin(Giocatore giocatore1, Giocatore giocatore2) {
        if (giocatore1.getVittorie() > giocatore2.getVittorie()) {
            return giocatore1.getNome() + " ha vinto!";
        } else if (giocatore1.getVittorie() < giocatore2.getVittorie()) {
            return giocatore2.getNome() + " ha vinto!";
        } else {
            return "Parità!";
        }
    }
}
