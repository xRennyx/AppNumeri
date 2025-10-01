import java.util.Scanner;
import static utility.Tools.*;
import utility.GestoreTesti;
public class Main {
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        boolean esci=false;
        String[] opzioni={"Opzioni:","1-Lunghezza Stringa", "2-Ricerca parola", "3-Sostituisci Parola"};
        System.out.println("Inserisci Stringa: ");
        String testo=sc.nextLine();
        GestoreTesti text=new GestoreTesti(testo);
        do
        {
            switch (Menu(opzioni, sc))
            {
                case 1->
                {
                    System.out.println(text.StringLenght());
                }
                case 2->
                {
                    System.out.println("Inserisci parola da cercare: ");
                    String parola=sc.nextLine();
                    System.out.println(text.verificaPresenzaParola(parola));
                }
                case 3->
                {
                    System.out.println("Inserisci parola da sostituire");
                    String parola=sc.nextLine();
                    System.out.println("Inserisci parola sostitutiva");
                    String parola2=sc.nextLine();
                    text.setTesto(text.sostituisciParola(parola, parola2));
                    System.out.println(text.getTesto());
                }
            }
        }while(!esci);

    }
}