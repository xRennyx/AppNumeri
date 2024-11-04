package frontScreen;
import java.time.LocalTime;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import gestione.Biglietto;
import gestione.Giostra;

import static utility.Tools.*;

import java.util.Random;
import java.util.Scanner;

public class FrontEnd {
    public static Biglietto leggiBiglietto (Scanner tastiera){
        Biglietto nuovo = new Biglietto();

        Random random = new Random();
        nuovo.numero = random.nextInt(30);

        System.out.println("Inserisci la data di entrata (formato gg-mm-aaaa): ");
        String dataEntrata = tastiera.nextLine();
        nuovo.Entrata = LocalDate.parse(dataEntrata, DateTimeFormatter.ofPattern("dd-MM-yyyy"));

        System.out.println("Inserisci l'orario di arrivo (formato hh:mm): ");
        String orarioArrivo = tastiera.nextLine();
        nuovo.OraEntrati = LocalTime.parse(orarioArrivo, DateTimeFormatter.ofPattern("HH:mm"));

        System.out.println("Inserisci l'orario di uscita (formato hh:mm): ");
        String orarioUscita = tastiera.nextLine();
        nuovo.OraUscita = LocalTime.parse(orarioUscita, DateTimeFormatter.ofPattern("HH:mm"));

        System.out.println("Inserisci la giostra da provare:");
        String[] opzioni = {"Giostre", "1 Ruota Panoramica", "2 Autoscontro", "3 Ottovolante", "4 Tagadà"};

        switch(Menu(opzioni, tastiera)) {
            case 1 -> nuovo.tipo = Giostra.RuotaPanoramica;
            case 2 -> nuovo.tipo = Giostra.Autoscontro;
            case 3 -> nuovo.tipo = Giostra.Ottovolante;
            case 4 -> nuovo.tipo = Giostra.Tagada;
        }
        return nuovo;
    }
}
