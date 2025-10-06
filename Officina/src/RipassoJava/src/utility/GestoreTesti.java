package utility;

/**
 * Classe che gestisce operazioni su una stringa di testo.
 * Permette di ottenere informazioni sulla stringa, modificarla e analizzarla.
 *
 * Funzionalità offerte:
 * - Ottenere o impostare il testo
 * - Calcolare la lunghezza del testo
 * - Verificare la presenza di una parola
 * - Sostituire parole nel testo
 * - Contare vocali e consonanti
 * - Invertire la frase
 * - Estrarre una sottostringa
 *
 */
public class GestoreTesti {

    /**
     * Testo su cui operare.
     */
    private String testo;

    /**
     * Costruttore che inizializza il gestore con un testo dato.
     *
     * @param testo Stringa da gestire.
     */
    public GestoreTesti(String testo) {
        this.testo = testo;
    }

    /**
     * Restituisce il testo corrente.
     *
     * @return testo attuale.
     */
    public String getTesto() {
        return testo;
    }

    /**
     * Imposta un nuovo testo.
     *
     * @param testo nuovo testo da impostare.
     */
    public void setTesto(String testo) {
        this.testo = testo;
    }

    /**
     * Restituisce la lunghezza del testo.
     *
     * @return numero di caratteri del testo.
     */
    public int StringLenght() {
        return this.testo.length();
    }

    /**
     * Verifica se una parola è presente nel testo.
     *
     * @param parola parola da cercare.
     * @return true se la parola è presente, false altrimenti.
     */
    public boolean verificaPresenzaParola(String parola) {
        return this.testo.contains(parola);
    }

    /**
     * Sostituisce tutte le occorrenze di una parola con una nuova parola nel testo.
     *
     * @param parolaDaSostituire parola da sostituire.
     * @param nuovaParola parola sostitutiva.
     * @return nuovo testo con le sostituzioni effettuate.
     */
    public String sostituisciParola(String parolaDaSostituire, String nuovaParola) {
        return this.testo.replaceAll(parolaDaSostituire, nuovaParola);
    }

    /**
     * Conta e stampa il numero di vocali e consonanti presenti nel testo.
     * Considera solo i caratteri alfabetici.
     */
    public void contaVocaliConsonanti() {
        int vocali = 0, consonanti = 0;
        this.testo = testo.toLowerCase();

        for (char c : testo.toCharArray()) {
            if (Character.isLetter(c)) {
                if ("aeiou".indexOf(c) != -1) {
                    vocali++;
                } else {
                    consonanti++;
                }
            }
        }

        System.out.println("Numero di vocali: " + vocali);
        System.out.println("Numero di consonanti: " + consonanti);
    }

    /**
     * Restituisce la frase invertita.
     *
     * @return testo invertito.
     */
    public String invertiFrase() {
        return new StringBuilder(this.testo).reverse().toString();
    }

    /**
     * Estrae e stampa una sottostringa dal testo, dati gli indici di inizio e fine.
     * Gestisce l'eventuale eccezione per indici non validi.
     *
     * @param inizio indice di inizio estrazione (inclusivo).
     * @param fine indice di fine estrazione (esclusivo).
     */
    public void estraiSubstring(int inizio, int fine) {
        try {
            String estratto = this.testo.substring(inizio, fine);
            System.out.println("Substring estratta: " + estratto);
        } catch (IndexOutOfBoundsException e) {
            System.out.println("Errore: Indici non validi per la frase data.");
        }
    }
}
