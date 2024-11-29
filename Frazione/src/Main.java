import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
    Scanner sc = new Scanner(System.in);
        System.out.println("Inserisci numeratore e denominatore: ");
    try {
        Frazione f = new Frazione(sc.nextInt(), sc.nextInt());
        Frazione f2 = new Frazione(sc.nextInt(), sc.nextInt());
        Frazione somma=f.somma(f2);
        System.out.println("Somma= "+somma.getNumeratore()+"/"+somma.getDenominatore());
        System.out.println("Somma= "+(double)somma.getNumeratore()/somma.getDenominatore());
    }catch (Exception e)
    {
        System.out.println(e.getMessage());
    }
    }
}