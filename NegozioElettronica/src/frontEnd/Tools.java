package frontEnd;

import backEnd.*;

import java.io.File;
import java.nio.file.Files;
import java.nio.file.Paths;
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
    public static ProdottoElettronico leggiProdotto()throws Exception
    {
        Scanner sc=new Scanner(System.in);
        System.out.println("Inserisci Codice: ");
        String code=sc.nextLine();
        System.out.println("Inserisci Marca: ");
        String marca=sc.nextLine();
        System.out.println("Inserisci Prezzo: ");
        double prezzo= Double.parseDouble(sc.nextLine());
        System.out.println("1-Smartphone\n2-PC");
        int scelta=Integer.parseInt(sc.nextLine());
        switch (scelta)
        {
            case 1-> {
                System.out.println("Inserisci Modello: ");
                String modello = sc.nextLine();
                System.out.println("Inserisci Memoria in GB: ");
                double memoria = Double.parseDouble(sc.nextLine());
                if (prezzo > 0 && memoria > 0) {
                    return new Smartphone(code, marca, prezzo, modello, memoria);
                } else {
                    throw new Exception("Prezzo e Memoria devono essere maggiori di 0");
                }
            }
            case 2->
            {
                System.out.println("Inserisci Processore: ");
                String processore=sc.nextLine();
                System.out.println("Inserisci HDD: ");
                double HDD= Double.parseDouble(sc.nextLine());
                return new PC(code, marca, prezzo, processore, HDD);
            }
        }
        return null;
    }

    public static Libro leggiLibro()
    {
        Scanner sc=new Scanner(System.in);
        System.out.println("Inserisci Nome: ");
        String nome= sc.nextLine();
        System.out.println("Inserisci Descrizione: ");
        String Descrizione= sc.nextLine();
        System.out.println("Inserisci Autore: ");
        String autore= sc.nextLine();
        System.out.println("Inserisci ISBN: ");
        int ISBN= sc.nextInt();
        System.out.println("Inserisci Prezzo: ");
        double prezzo= sc.nextDouble();
        System.out.println("Inserisci Quantità: ");
        int quantita= sc.nextInt();
        System.out.println("Inserisci Argmento: ");
        String argpmento= sc.nextLine();
        return new Manuale(nome, Descrizione, autore, ISBN, prezzo, quantita, argpmento);

    }


}