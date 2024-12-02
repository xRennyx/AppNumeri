import java.util.Scanner;
public class Main
{
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        Cronometro cronometro = new Cronometro();

        System.out.println("Premi INVIO per avviare il cronometro.");
        scanner.nextLine(); // Aspetta che l'utente prema INVIO
        cronometro.avvia();

        System.out.println("Premi INVIO per fermare il cronometro.");
        scanner.nextLine(); // Aspetta che l'utente prema INVIO
        cronometro.ferma();

        System.out.println("Durata registrata: " + cronometro.getDurataFormattata());
        scanner.close();
    }
}

