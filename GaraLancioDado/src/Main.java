import backEnd.Dado;
import backEnd.Gara;
import backEnd.Giocatore;
import frontEnd.Dati;

import java.util.Scanner;
/*Modificare la classe partita in modo che:
-sia possibile giocare sia la  partite base che avanzata;
-la partita base funziona come nella versione precedente.
La partita avanzata aggiunge un sistema di bonus:
tiene traccia delle vittorie consecutive e dopo 3 vittorie consecutive, assegna un punto (una
vincita) bonus al giocatore.
Il bonus viene azzerato in caso di pareggio.
Si consideri di implementare il polimorfismo implementando
nel main un metodo che permette di giocare
una partita standard o una partita avanzata:
giocaPartita(partitaBase);
giocaPartita(partitaAvanzata);*/

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Inserisci numero di Round totali: ");
        int round = sc.nextInt();
        int roundGiocati = 0;

        try
        {
            Dado dado1 = Dati.LeggiDato();
            Giocatore giocatore1 = Dati.leggiGiocatore();
            Giocatore giocatore2 = Dati.leggiGiocatore();
            Gara g = new Gara();

            do
            {
                // Lancia i dadi UNA SOLA VOLTA per round
                int lancio1 = dado1.lancioDado();
                int lancio2 = dado1.lancioDado();
                System.out.println(g.base(giocatore1, giocatore2, lancio1, lancio2));
                g.vincitoreRound(giocatore1, giocatore2, lancio1, lancio2);
                roundGiocati++;
            }
            while (g.fineGara(roundGiocati, round));

            System.out.println(g.gameWin(giocatore1, giocatore2));
        }
        catch (Exception e)
        {
            System.out.println(e.getMessage());
        }
    }
}
