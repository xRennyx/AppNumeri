import backEnd.Dado;
import backEnd.Gara;
import backEnd.Giocatore;
import frontEnd.*;
public class Main {
    public static void main(String[] args) {

        try {
            Dado dado1 = Dati.LeggiDato();
            Giocatore giocatore1=Dati.leggiGiocatore();
            Dado dado2=dado1;
            Giocatore giocatore2=Dati.leggiGiocatore();
            Gara g=new Gara();
            System.out.println(g.round(giocatore1, giocatore2, dado1, dado2));
            System.out.println(g.gameWin(giocatore1, giocatore2));
        } catch (Exception e)
        {
            System.out.println(e.getMessage());
        }


    }
}
