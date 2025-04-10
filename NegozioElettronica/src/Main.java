
import backEnd.*;
import backEnd.NegozioElettronica;
import frontEnd.Tools;

import static frontEnd.Tools.*;

import java.awt.*;
import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        NegozioElettronica n = new NegozioElettronica();
        Scanner sc = new Scanner(System.in);
        boolean esci = false;
        String[] opzioni = {"SCEGLI OPZIONE", "INSERISCI ELETTRONICO", "VISUALIZZA", "RICERCA", "RIMUOVI", "MODIFICA PREZZO", "INSERISCI LIBRO","ESCI"};

        do {
            try {
                switch (Menu(opzioni, sc)) {
                    case 1 -> {
                        Prodotto p = Tools.leggiProdotto();
                        n.inserisciProdotto(p);
                    }
                    case 2 ->
                    {
                        ArrayList<Prodotto>visualizza=n.visualizza();
                        visualizza.forEach(v-> System.out.println(v.toString()));
                    }
                    case 3 -> {
                        System.out.println("Inserisci codice da ricercare: ");
                        String code=sc.nextLine();
                        System.out.println(n.ricerca(code));

                    }
                    case 4 ->
                    {
                        System.out.println("Inserisci codice da ricercare: ");
                        String code=sc.nextLine();
                        n.rimuovi(code);
                    }
                    case 5 ->
                    {
                        System.out.println("Inserisci codice da ricercare: ");
                        String code=sc.nextLine();
                        System.out.println("Inserisci Prezzo: ");
                        double prezzo= Double.parseDouble(sc.nextLine());
                        n.modificaPrezzo(code, prezzo);
                    }
                    case 6->
                    {
                        try {
                            Prodotto p = Tools.leggiLibro();
                            n.inserisciProdotto(p);
                        }catch (Exception e)
                        {
                            System.out.println(e.getMessage());
                        }
                    }
                    case 7 -> {
                        esci = true;
                    }
                    default -> System.out.println("Errore opzione");

                }
            } catch (Exception e) {
                System.out.println(e.getMessage());
            }
        } while (!esci);

    }
}
