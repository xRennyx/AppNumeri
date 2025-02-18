import backEnd.Dado;
import backEnd.Gara;
import backEnd.Giocatore;
import frontEnd.*;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        System.out.println("Inserisci numero di Round totali: ");
        int round= sc.nextInt();
        int roundGiocati=0;
        try {
            Dado dado1 = Dati.LeggiDato();
            Giocatore giocatore1=Dati.leggiGiocatore();
            Dado dado2=dado1;
            Giocatore giocatore2=Dati.leggiGiocatore();
            Gara g=new Gara();
            do
            {
                System.out.println(g.round(giocatore1, giocatore2, dado1, dado2));
                g.vincitoreRound(giocatore1, giocatore2, dado1, dado2);
                roundGiocati++;
            }while(g.fineGara(roundGiocati, round));
            System.out.println(g.gameWin(giocatore1, giocatore2));
        } catch (Exception e)
        {
            System.out.println(e.getMessage());
        }


    }
}
