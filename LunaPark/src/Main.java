import gestione.Biglietto;
import java.util.ArrayList;
import java.util.Scanner;
import static utility.Tools.*;
import frontScreen.*;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        final int MAXPERSONE = 10;
        ArrayList<Biglietto> lunaPark = new ArrayList<>();
        String[] opzioni = {"Menu", "Entrata", "Visualizza", "Uscita", "Esci"};
        boolean esci = true;

        do {
            try {
                switch (Menu(opzioni, sc)) {
                    case 1 -> {
                        Biglietto nuovoBiglietto = FrontEnd.leggiBiglietto(sc);
                        if (inserisciBiglietto(lunaPark, nuovoBiglietto, MAXPERSONE)) {
                            System.out.println("Biglietto inserito con successo!");
                        } else {
                            System.out.println("Biglietto già presente o limite massimo di persone raggiunto.");
                        }
                    }
                    case 2 -> visualizzaBiglietti(lunaPark);

                }
            } catch (Exception e) {
                System.out.println("Si è verificato un errore: " + e.getMessage());
            }
        } while (esci);
    }

    public static boolean inserisciBiglietto(ArrayList<Biglietto> lunaPark, Biglietto nuovo, int maxPersone) {
        if (lunaPark.size() >= maxPersone) {
            return false; // Limite massimo raggiunto
        }

        for (Biglietto biglietto : lunaPark) {
            // Assumiamo che i biglietti siano unici basati su un attributo specifico, come il numero
            if (biglietto.numero == nuovo.numero) {
                return false; // Biglietto già presente
            }
        }

        lunaPark.add(nuovo); // Aggiungi il biglietto se non è già presente
        return true; // Inserimento riuscito
    }

    public static void visualizzaBiglietti(ArrayList<Biglietto> lunaPark) {
        if (lunaPark.isEmpty()) {
            System.out.println("Nessun biglietto da visualizzare.");
            return;
        }

        System.out.println("Biglietti attualmente nel Luna Park:");
        for (Biglietto biglietto : lunaPark) {
            System.out.println(biglietto.FormattaDati());
        }
    }
}
