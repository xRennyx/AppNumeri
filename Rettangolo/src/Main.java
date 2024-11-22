import java.util.Scanner;

public class Main
{
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        System.out.println("Inserisci i punti: ");
        Punto p1 = new Punto(sc.nextInt(),sc.nextInt());
        Punto p2 = new Punto(sc.nextInt(),sc.nextInt());
        Punto p3 = new Punto(sc.nextInt(),sc.nextInt());
        Punto p4 = new Punto(sc.nextInt(),sc.nextInt());
        Rettangolo rettangolo=new Rettangolo(p1,p2,p3,p4);

        System.out.println("Lati del rettangolo:");
        for (Segmento segmento : rettangolo.getRettangolo()) {
            System.out.println("Lunghezza: " + segmento.calcolaLunghezza());
        }

        double perimetro = rettangolo.calcolaPerimetro();
        System.out.println("Perimetro del rettangolo: " + perimetro);

        double area = rettangolo.calcolaArea();
        System.out.println("Area del rettangolo: " + area);
    }


}
