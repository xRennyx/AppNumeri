import java.util.Scanner;

import static utility.Tools.*;
import frontScreen.FrontEnd;
import mensola.Libro;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;

import java.util.ArrayList;
public class Main
{
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        ArrayList<Libro> mensola= new ArrayList<>();
        boolean esci=false;
        String[] opzioni={"SCEGLI OPZIONI", "INSERISCI", "VISUALIZZA", "RICERCA", "CANCELLA LIBRO", "MODIFICA DATA", "RICERCA TITOLO", "RICERCA AUTORE", "RIMUOVI LIBRI APPARTENENTI ALL'AUTORE","VISUALIZZA LIBRI PRECEDENTI","VISUALIZZA SUCCESSIVI", "ESCI"};
        do
        {
            switch (Menu(opzioni, sc)) {
                case 1 ->
                {
                    Libro nuovoLibro = FrontEnd.LeggiLibro(sc);

                    if(controllo(mensola, nuovoLibro))
                    {
                        mensola.add(nuovoLibro);
                    }
                    else
                    {
                        System.out.println("Libro già presente");
                    }

                }
                case 2-> visualizza(mensola);
                case 3->
                {
                    System.out.println("Inserisci Autore da Ricercare: ");
                    String Autore= sc.nextLine();
                    System.out.println("Insersci il titolo da ricercare: ");
                    String Titolo=sc.nextLine();
                    try
                    {
                        System.out.println(mensola.get(ricerca(mensola, Autore, Titolo)).FormattaDati());
                    }
                    catch(Exception e)
                    {
                        System.out.println(e.getMessage());
                    }

                }
                case 4->
                {
                    System.out.println("Inserisci il titolo del libro da rimuovere:");
                    String titolo = sc.nextLine();
                    System.out.println("Inserisci l'autore del libro da rimuovere:");
                    String autore = sc.nextLine();
                    try
                    {
                        cancellaLibro(mensola, titolo, autore);
                        System.out.println("Libro Cancellato");
                    } catch (Exception e)
                    {
                        System.out.println(e.getMessage());
                    }
                }
                case 5->
                {
                    System.out.println("Inserisci il titolo del libro per modificare la data di pubblicazione:");
                    String titolo = sc.nextLine();
                    System.out.println("Inserisci l'autore del libro:");
                    String autore = sc.nextLine();
                    try
                    {
                        modificaDataPubblicazione(mensola, autore, titolo, sc);
                    }catch(Exception e)
                    {
                        System.out.println(e.getMessage());
                    }

                }
                case 6->
                {
                    try
                    {
                        System.out.println("Inserisci il titolo del libro da cercare:");
                        String titolo = sc.nextLine();
                        int index=FindIndex(mensola, titolo);
                        System.out.println(mensola.get(index).FormattaDati());
                    }
                    catch(Exception e)
                    {
                        System.out.println(e.getMessage());
                    }
                }
                case 7->
                {
                    try
                    {
                        System.out.println("Inserisci il l'Autore del libro da cercare:");
                        String Autore = sc.nextLine();
                        ArrayList<Libro> LibriTrovati= FindAll(mensola, Autore);
                        System.out.println("Libri Appartenenti all'autore");
                        for(Libro libro: LibriTrovati)
                        {
                            if (libro != null)
                            {
                                System.out.println(libro.FormattaDati());
                            }
                        }
                    }
                    catch(Exception e)
                    {
                        System.out.println(e.getMessage());
                    }
                }
                case 8->
                {
                    System.out.println("Inserisci il l'Autore del libro da rimuovere:");
                    String Autore = sc.nextLine();
                    ArrayList<Libro> newMensola=RemoveAll(mensola, Autore);
                    System.out.println("Nuova mensola senza autore: ");
                    for (Libro libro : newMensola)
                    {
                        System.out.println(libro.FormattaDati());
                    }
                }
                case 9->
                {
                    System.out.println("Inserisci la posizione da cui cercare: ");
                    int index;
                    do
                    {
                        index=Integer.parseInt(sc.nextLine());
                    }while(index>mensola.size());
                    VisualizzaPrecedenti(mensola, index);

                }
                case 10->
                {
                    System.out.println("Inserisci la posizione da cui cercare: ");
                    int index;
                    do
                    {
                        index=Integer.parseInt(sc.nextLine());
                    }while(index>mensola.size());
                    VisualizzaSuccessivi(mensola, index);
                }
                case 11-> esci=true;
            }
        }while(!esci);
    }
    public static boolean controllo(ArrayList<Libro> mensola, Libro nuovolibro)
    {
        boolean presente=true;
        for(int i=0; i< mensola.size(); i++)
        {
            if (mensola.get(i).Autore.equals(nuovolibro.Autore) && mensola.get(i).Titolo.equals(nuovolibro.Titolo)) {
                presente = false;
            }
            return presente;
        }


        return presente;
    }
    public static void visualizza(ArrayList<Libro> mensola)
    {
        mensola.forEach(libro -> System.out.println(libro.FormattaDati()));
    }
    public static int ricerca (ArrayList<Libro> mensola, String Autore, String Titolo)throws Exception
    {
        int pos=0;
        for(int i=0; i<mensola.size(); i++)
        {
            if(mensola.get(i).Autore.equals(Autore) && mensola.get(i).Titolo.equals(Titolo))
            {
                return pos=i;
            }
        }
        throw new Exception("Libro non trovato");
    }
    public static void cancellaLibro(ArrayList<Libro> mensola, String Titolo, String Autore) throws Exception {
        boolean rimuovi = mensola.removeIf(m ->m.Titolo.equals(Titolo) && m.Autore.equals(Autore));
        if (!rimuovi)
        {
            throw new Exception("Libro non trovato");
        }
    }
    public static void modificaDataPubblicazione(ArrayList<Libro> mensola, String Autore, String Titolo, Scanner sc) throws Exception
    {
        for (Libro libro : mensola)
        {
            if (libro.Autore.equals(Autore) && libro.Titolo.equals(Titolo)) {
                System.out.println("Inserisci la nuova data di pubblicazione (formato: gg-mm-aaaa):");
                LocalDate nuovaData = LocalDate.parse(sc.nextLine(), DateTimeFormatter.ofPattern("dd-MM-yyyy"));
                libro.dataDiPubblicazione = nuovaData;
                System.out.println("Data di pubblicazione aggiornata.");
            }
        }
        throw new Exception("Libro non trovato");
    }
    public static int FindIndex(ArrayList<Libro> mensola, String Titolo) throws Exception
    {
        for (int i = 0; i < mensola.size(); i++) {
            if (mensola.get(i).Titolo.equals(Titolo)) {
                return i;
            }
        }
        throw new Exception("Libro non trovato");
    }
    public static ArrayList<Libro> FindAll(ArrayList<Libro> mensola, String Autore) throws Exception
    {
        ArrayList<Libro> LibriTrovati = new ArrayList<>();
        for (Libro libro : mensola) {
            if (libro.Autore.equals(Autore)) {
                LibriTrovati.add(libro);
            }
        }
        if (LibriTrovati.isEmpty()) {
            throw new Exception("Autore non trovato");
        }
        return LibriTrovati;
    }
    public static ArrayList<Libro> RemoveAll(ArrayList<Libro> mensola, String Autore)
    {
        mensola.removeIf(libro -> libro.Autore.equals(Autore));
        return mensola;
    }
    public static void VisualizzaPrecedenti(ArrayList<Libro> mensola, int index)
    {
        for(int i=index; i>= 0; i--)
        {
            System.out.println(mensola.get(i).FormattaDati());
        }
    }
    public static void VisualizzaSuccessivi(ArrayList<Libro> mensola, int index)
    {
        for(int i=index; i< mensola.size(); i++)
        {
            System.out.println(mensola.get(i).FormattaDati());
        }
    }


}
