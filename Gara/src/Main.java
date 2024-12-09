import java.util.Random;
import java.util.Scanner;


public class Main
{
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        Random rn=new Random();
        int tempo;
        try {
            Pilota p = new Pilota("Carlo", "Sainz");
            p.setNazionalita("Spagna");
            System.out.println(p);
            Scuderia a=new Scuderia("Ferrari",p, 2);
            a.setCronometro(180);
            System.out.println(a);
        }catch (Exception e)
        {
            System.out.println(e.getMessage());
        }
        try
        {
            Cronometro cr=new Cronometro();
            tempo= rn.nextInt(0, 40)+3;
            cr.setStartime();
            wait(tempo);
            cr.setEndtime();
        }catch (Exception e)
        {
            System.out.println(e.getMessage());
        }
    }
}
