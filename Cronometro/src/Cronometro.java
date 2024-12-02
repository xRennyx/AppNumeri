import java.time.Duration;
import java.time.Instant;


public class Cronometro {
    private Instant startTime; // Memorizza il momento in cui il cronometro è stato avviato
    private Instant endTime;   // Memorizza il momento in cui il cronometro è stato fermato
    private boolean isRunning; // Indica se il cronometro è in funzione

    // Metodo per avviare il cronometro
    public void avvia() {
        if (!isRunning) {
            startTime = Instant.now(); // Registra l'orario corrente
            isRunning = true;
            System.out.println("Cronometro avviato.");
        } else {
            System.out.println("Il cronometro è già in funzione.");
        }
    }

    // Metodo per fermare il cronometro
    public void ferma() {
        if (isRunning) {
            endTime = Instant.now(); // Registra l'orario corrente
            isRunning = false;
            System.out.println("Cronometro fermato.");
        } else {
            System.out.println("Il cronometro non è in funzione.");
        }
    }

    // Metodo per calcolare la differenza di tempo (durata)
    public Duration calcolaDurata() {
        if (startTime == null) {
            throw new IllegalStateException("Il cronometro non è stato avviato.");
        }
        // Usa l'orario corrente se il cronometro è ancora in funzione
        Instant fine = isRunning ? Instant.now() : endTime;
        return Duration.between(startTime, fine);
    }

    // Metodo per ottenere la durata in un formato leggibile
    public String getDurataFormattata() {
        Duration durata = calcolaDurata();
        long secondi = durata.getSeconds();
        long ore = secondi / 3600;
        long minuti = (secondi % 3600) / 60;
        long secondiRestanti = secondi % 60;
        return String.format("%02d:%02d:%02d", ore, minuti, secondiRestanti);
    }
}