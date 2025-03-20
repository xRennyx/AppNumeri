import java.util.ArrayList;
public class Main
{
    public static void main(String[] args)
    {
        Sfera s1=new Sfera(20, 2);
        Cubo c1= new Cubo(20, 4);
        System.out.println(s1.toString());
        System.out.println(c1.toString());
        ArrayList<CorpoSolido> solidi=new ArrayList<>();
        try
        {
            solidi.add(s1);
            solidi.add(c1);
            solidi.forEach(s-> System.out.println(s.toString()));
            for(CorpoSolido c: solidi)
            {
                if(c instanceof Validatore)
                {
                    System.out.println("OK Cubo Login");
                }
                else
                {
                    System.out.println("Login non concesso");
                }
            }
        }
        catch (Exception e)
        {
            System.out.println(e.getMessage());
        }
    }
}