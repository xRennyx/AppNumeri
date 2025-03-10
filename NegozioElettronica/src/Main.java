import backEnd.NegozioElettronica;
import backEnd.ProdottoElettronico;
import backEnd.Smartphone;
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
        String[] opzioni = {"SCEGLI OPZIONE", "INSERISCI", "VISUALIZZA", "RICERCA", "RIMUOVI", "MODIFICA PREZZO", "ESCI"};

        do {
            try {
                switch (Menu(opzioni, sc)) {
                    case 1 -> {
                        ProdottoElettronico p = Tools.leggiProdotto();
                        n.inserisciProdotto(p);
                    }
                    case 2 ->
                    {
                        ArrayList<ProdottoElettronico>visualizza=n.visualizza();
                        visualizza.forEach(v-> System.out.println(v.toString()));
                    }
                    case 3 -> {
                        System.out.println("Inserisci codice da ricercare: ");
                        String code=sc.nextLine();
                        System.out.println(n.ricerca(code));

                    }
                    case 4 -> {

                    }
                    case 5 -> {

                    }
                    case 6 -> {
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
