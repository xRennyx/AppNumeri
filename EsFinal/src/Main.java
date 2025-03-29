import backend.Elementari;
import backend.Gestione;
import backend.Scuola;
import frontend.Test;

import static frontend.Test.*;
import java.awt.*;
import java.util.ArrayList;
import java.util.Scanner;

public class Main
{
    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        Gestione g=new Gestione();
        String[] opzioni={"OPZIONI","INSERISCI", "VISUALIZZA", "ESCI"};
        boolean esci=false;
        do {
            try {
                switch (Menu(opzioni, sc)) {
                    case 1 -> {
                        Scuola s = Test.leggiScuola();
                        g.addScuola(s);
                    }
                    case 2->
                    {
                        ArrayList<Scuola> visualizza=g.visualizza();
                        visualizza.forEach(System.out::println);
                    }
                    case 3-> esci=true;
                    default -> System.out.println("Opzione sbagliata");
                }
            }
            catch (Exception e)
            {
                System.out.println(e.getMessage());
            }
        }while(!esci);

    }
}
