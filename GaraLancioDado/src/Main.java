import backEnd.Dado;
import backEnd.Gara;
import backEnd.Giocatore;
import frontEnd.Dati;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Inserisci numero di Round totali: ");
        int round = sc.nextInt();
        int roundGiocati = 0;

        try {
            Dado dado1 = Dati.LeggiDato();
            Giocatore giocatore1 = Dati.leggiGiocatore();
            Giocatore giocatore2 = Dati.leggiGiocatore();
            Gara g = new Gara();

            do {
                // Lancia i dadi UNA SOLA VOLTA per round
                int lancio1 = dado1.lancioDado();
                int lancio2 = dado1.lancioDado();

                System.out.println(g.round(giocatore1, giocatore2, lancio1, lancio2));
                g.vincitoreRound(giocatore1, giocatore2, lancio1, lancio2);
                roundGiocati++;
            } while (g.fineGara(roundGiocati, round));

            System.out.println(g.gameWin(giocatore1, giocatore2));
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
    }
}
