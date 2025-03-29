package frontend;

import backend.*;

import java.io.File;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.util.ArrayList;
import java.util.Scanner;

public class Test {
    /*public static void main(String[] args) {

    }*/
    private Test() {
    }

    ; //impedisce di istanziare la classe

    public static void clrScr() {
        try {
            new ProcessBuilder("cmd", "/c", "cls").inheritIO().start().waitFor();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    public static void Wait(int attesa) {
        try {
            Thread.sleep(attesa);
        } catch (InterruptedException e) {
            e.printStackTrace();
        }
    }

    public static int Menu(String opzioni[], Scanner tastiera) {// parametri formali
        int scelta;

        do {
            clrScr();
            System.out.println("------------------");
            System.out.println(opzioni[0]);
            System.out.println("------------------");
            for (int i = 1; i < opzioni.length; i++) {
                System.out.println("[" + i + "]" + " " + opzioni[i]);
            }
            scelta = (Integer.parseInt(tastiera.nextLine()));
            //tastiera.nextLine();
            if ((scelta < 1) || (scelta > opzioni.length - 1)) {
                System.out.println("Opzione Sbagliata");
                Wait(2000);
            }
        }
        while ((scelta < 1) || (scelta > opzioni.length - 1));
        //tastiera.nextLine();
        return scelta;
    }
    public static Scuola leggiScuola()
    {
        Scanner sc=new Scanner(System.in);
        System.out.println("Inserisci codice: ");
        String codice= sc.nextLine();
        System.out.println("Inserisci denominazione: ");
        String denom=sc.nextLine();
        System.out.println("Inserisci indirizzo: ");
        String address= sc.nextLine();
        System.out.println("Inserisci numero studenti: ");
        int nStudenti= Integer.parseInt(sc.nextLine());
        System.out.println("Inserisci numero classi");
        int nClassi= Integer.parseInt(sc.nextLine());
        System.out.println("Inserisci numero extrasedi: ");
        int extraSedi= Integer.parseInt(sc.nextLine());
        System.out.println("Inserisci numero Laboratori: ");
        int nLaboratori= Integer.parseInt(sc.nextLine());
        System.out.println("Scegli tipo di scuola:\n[1] Elementari\n[2] Medie\n[3] Professionale\n[4] Tecnico\n[5] Liceo");
        int scelta=Integer.parseInt(sc.nextLine());
        switch(scelta)
        {
            case 1->
            {
                return new Elementari(codice, denom, address, nStudenti, nClassi, extraSedi, nLaboratori);
            }
            case 2->
            {
                return new Medie(codice, denom, address, nStudenti, nClassi, extraSedi, nLaboratori);
            }
            case 3->
            {
                return new Professionale(codice, denom, address, nStudenti, nClassi, extraSedi, nLaboratori);
            }
            case 4->
            {
                return new Tecnico(codice, denom, address, nStudenti, nClassi, extraSedi, nLaboratori);
            }
            case 5->
            {
                return new Liceo(codice, denom, address, nStudenti, nClassi, extraSedi, nLaboratori);
            }
            default -> System.out.println("Scelta non valida");
        }
        return null;
    }
}