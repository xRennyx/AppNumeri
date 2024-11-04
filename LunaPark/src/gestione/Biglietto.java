package gestione;

import java.time.Duration;
import java.time.LocalDate;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;

public class Biglietto {

    public int numero;
    public LocalDate Entrata;
    public LocalTime OraEntrati;
    public LocalTime OraUscita;
    public Giostra tipo;
    private DateTimeFormatter dataFormat = DateTimeFormatter.ofPattern("dd-MM-yyyy");
    DateTimeFormatter timeFormat = DateTimeFormatter.ofPattern("HH:mm");

    public String FormattaDati() {
        Duration durata = Duration.between(OraEntrati, OraUscita);
        long ore = durata.toHours();
        long minuti = durata.toMinutes() % 60;

        return String.format("Numero Biglietto: %d, Data: %s, Orario Arrivo: %s, Orario Partenza: %s, Durata Permanenza: %02d ore e %02d minuti, Tipologia di giostra: %s",numero, Entrata.format(dataFormat), OraEntrati.format(timeFormat), OraUscita.format(timeFormat), ore, minuti, tipo);
    }
}
