package frontEnd;

import backEnd.*;

import java.util.Scanner;

public class Dati {
    public static Dado LeggiDato() throws Exception
    {
        Scanner sc= new Scanner(System.in);
        int nFacce=0;
        System.out.println("Inserisci facce del Dado:\n1-4 Facce\n2-6 Facce\n3-8 Facce\n4-12 Facce\n5-20 Facce");
        int scelta= sc.nextInt();
        switch (scelta)
        {
            case 1-> nFacce=4;
            case 2-> nFacce=6;
            case 3-> nFacce=8;
            case 4-> nFacce=12;
            case 5-> nFacce=20;
            default -> throw new Exception("Errore inserimento numero");
        }
        return new Dado(nFacce);
    }
    public static Giocatore leggiGiocatore()
    {
        Scanner sc= new Scanner(System.in);
        System.out.println("Inserisci nome giocatore: ");
        String nome= sc.nextLine();
        return new Giocatore(nome);
    }
}
