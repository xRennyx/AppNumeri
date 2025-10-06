import java.util.Scanner;
import static utility.Tools.*;
import utility.GestoreTesti;

/**
 * Classe principale che gestisce l'interfaccia utente per operare su una stringa.
 * Offre un menu interattivo con diverse opzioni per manipolare o analizzare il testo inserito.
 *
 * Funzionalità offerte:
 * - Calcolare la lunghezza della stringa
 * - Cercare una parola
 * - Sostituire una parola con un'altra
 * - Contare vocali e consonanti
 * - Invertire la frase
 * - Estrarre una sottostringa
 * - Uscire dal programma
 *
 * Nota: Il metodo {@code Menu()} è importato staticamente da {@code utility.Tools} e gestisce la selezione dell'opzione.
 */
public class Main {

    /**
     * Metodo principale che avvia il programma.
     * Cattura l'input dell'utente, crea un oggetto {@code GestoreTesti} per gestire il testo
     * e consente all'utente di interagire con un menu finché non decide di uscire.
     *
     */
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        boolean esci = false;

        // Definizione delle opzioni del menu (manca opzione 7 nel testo, aggiunta in GestoreTesti)
        String[] opzioni = {"Opzioni:","1-Lunghezza Stringa","2-Ricerca parola","3-Sostituisci Parola","4-Conta Vocali e consanti","5-Inverti frase","6-Estrai frase","7-Esci"
        };

        System.out.println("Inserisci Stringa: ");
        String testo = sc.nextLine();

        // Creazione dell'oggetto per gestire il testo
        GestoreTesti text = new GestoreTesti(testo);

        // Ciclo del menu
        do {
            switch (Menu(opzioni, sc)) {
                case 1 -> {
                    // Stampa lunghezza stringa
                    System.out.println(text.StringLenght());
                }
                case 2 -> {
                    // Ricerca parola nel testo
                    System.out.println("Inserisci parola da cercare: ");
                    String parola = sc.nextLine();
                    System.out.println(text.verificaPresenzaParola(parola));
                }
                case 3 -> {
                    // Sostituzione parola nel testo
                    System.out.println("Inserisci parola da sostituire");
                    String parola = sc.nextLine();
                    System.out.println("Inserisci parola sostitutiva");
                    String parola2 = sc.nextLine();
                    text.setTesto(text.sostituisciParola(parola, parola2));
                    System.out.println(text.getTesto());
                }
                case 4 -> {
                    // Conta vocali e consonanti e stampa il risultato
                    text.contaVocaliConsonanti();
                }
                case 5 -> {
                    // Inverte la frase e la stampa
                    System.out.println(text.invertiFrase());
                }
                case 6 -> {
                    // Estrae una sottostringa dai limiti dati
                    System.out.println("Inizio: ");
                    int inizio = sc.nextInt();
                    System.out.println("Fine: ");
                    int fine = sc.nextInt();
                    sc.nextLine(); // Consuma newline rimasto
                    text.estraiSubstring(inizio, fine);
                }
                case 7 -> {
                    // Uscita dal ciclo e dal programma
                    esci = true;
                }
                default -> {
                    // Gestione input non valido (opzionale)
                    System.out.println("Opzione non valida, riprova.");
                }
            }
        } while (!esci);
    }
}
