package frontEnd;

import backEnd.*;

import java.io.File;
import java.util.ArrayList;
import java.util.Scanner;

public class Tools {
    /*public static void main(String[] args) {

    }*/
    private Tools() {
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

    public static Libro leggiLibro(Scanner tastiera, boolean soluzioni) {
        Genere[] tipoGenere = Genere.values();
        String[] sceltaGenere = {"GENERE", "ROMANZO", "MANUALE", "THRILLER"};


        System.out.print("Inserisci l'autore del libro: ");
        String autore = tastiera.nextLine();
        System.out.print("Inserisci il titolo del libro: ");
        String titolo = tastiera.nextLine();
        System.out.print("Inserisci il numero di pagine del libro: ");
        int nPagine = Integer.parseInt(tastiera.nextLine());

        System.out.println("Inserisci il tipo del libro: ");
//         Menu(sceltaGenere, tastiera);
        Genere tipo = tipoGenere[Menu(sceltaGenere, tastiera) - 1]; // visto che Menu parte da indice 1
        if(tipo.equals(Genere.MANUALE))
        {
            System.out.println("Inserisci argomento: ");
            String argomento=tastiera.nextLine();
            System.out.println("Inserisci livello:\n1-BASE\n2-PRINCIPIANTE\n3-ESPERTO");
            int scelta= Integer.parseInt(tastiera.nextLine());
            Livello l;
            if(scelta==1)
            {
                l=Livello.BASE;
            }
            else if (scelta==2)
            {
                l=Livello.PRINCIPIANTE;
            }
            else
            {
                l=Livello.ESPERTO;
            }
            return new Manuale(autore, titolo, nPagine, tipo, argomento, l);
        }
        else if(tipo.equals(Genere.THRILLER))
        {
            System.out.println("Deriva da serie TV?\n1-Si\n2-No");
            int scelta= Integer.parseInt(tastiera.nextLine());
            boolean TV;
            if(scelta==1)
            {
                TV=true;
            }
            else
            {
                TV=false;
            }
            return new Thriller(autore, titolo, nPagine, tipo, TV);
        }
        else
        {
            System.out.println("Inserisci genere letterario:\n1-STORICO\n2-FANTASY\n3-ARMONY");
            int scelta=Integer.parseInt(tastiera.nextLine());
            Letterario l;
            if(scelta==1)
            {
                l=Letterario.STORICO;
            } else if (scelta==2)
            {
                l=Letterario.FANTASY;
            }
            else
            {
                l=Letterario.ARMONY;
            }
            return new Romanzo(autore, titolo, nPagine, tipo, l);
        }

    }

    public static String[] findFile(String[] dir, String fileExt) {
        String[] arr = new String[dir.length + 1];
        arr[0] = "LISTA FILE " + fileExt;
        int counter = 0;
        for (String s : dir) {
            if (s.endsWith(fileExt)) {
                arr[++counter] = s;
            }
        }
        String[] secondArr = new String[counter+1];
        System.arraycopy(arr, 0, secondArr, 0, secondArr.length);
        return secondArr;
    }

    public static int filesSelection(String[] findFile) {
        return Menu(findFile, new Scanner(System.in));
    }
}