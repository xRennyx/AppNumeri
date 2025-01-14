import backEnd.Genere;
import backEnd.Libro;
import backEnd.Mensola;
import frontEnd.Tools;

import static frontEnd.Tools.*;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        boolean uscita = false;

        Scanner tastiera = new Scanner(System.in);
        boolean soluzioni = false;
        Mensola libreria = new Mensola(3);

        String[] opzioni = {"---LIBRERIA---", "1. Inserimento", "2. Visualizzazione", "3. Ricerca", "4. Cancellazione", "5. Fine"};
        do {
            clrScr();
            int scelta = Menu(opzioni, tastiera);
            switch (scelta) {
                case 1 -> {
                    try {
                        System.out.println("Inserimento");
                        if (!libreria.checkSpace()) {
                            libreria.addLibro(Tools.leggiLibro(tastiera, soluzioni));
                        }
                    } catch (Exception e) {
                        System.out.println(e.getMessage());
                    }
                }

                case 2 -> {
                    System.out.println("Visualizzazione");
                    if (!libreria.isEmpty()) {
                        visualizzaMensola(libreria.getVolumi());
                    }
                }

                case 3 -> {
                    if (!libreria.isEmpty()) {
                        System.out.println("Inserisci l'autore del libro che vuoi ricercare");
                        String autore = tastiera.nextLine();
                        System.out.println("Inserisci il titolo del libro che vuoi ricercare");
                        String titolo = tastiera.nextLine();

                        if (libreria.findBook(autore, titolo) != null) {
                            System.out.println(libreria.findBook(autore, titolo));
                        } else {
                            System.out.println("Libro non trovato");
                        }

                    } else {
                        System.out.println("La mensola è vuota");
                    }
                }
                case 4 -> {
                    if (!libreria.isEmpty()) {
                        System.out.println("Inserisci l'autore del libro che vuoi eliminare");
                        String autore = tastiera.nextLine();
                        System.out.println("Inserisci il titolo del libro che vuoi eliminare");
                        String titolo = tastiera.nextLine();

                        if (libreria.removeBook(autore, titolo)) {
                            System.out.println("Il libro è stato tolto dalla mensola");
                        } else {
                            System.out.println("Libro non trovato");
                        }
                    } else {
                        System.out.println("La mensola è vuota");
                    }
                }
                case 5 -> {
                    System.out.println("Fine");
                    uscita = true;
                }
            }
        } while (!uscita);
    }
}