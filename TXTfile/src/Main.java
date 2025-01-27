import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.ArrayList;

public class Main
{
    public static void main(String[] args) {
        ArrayList<Persona> gentaglia=new ArrayList<>();
        gentaglia.add(new Persona("Tony", 50));
        gentaglia.add(new Persona("Al Pacino", 30));
        gentaglia.add(new Persona("Al Capone", 22));
        gentaglia.add(new Persona("Rambo", 27));

        scriviPersona(gentaglia, "persona.csv");
        ArrayList<Persona> aaa= leggiPersona("persona.csv");
        System.out.println(aaa.toString());
    }
    public static void scriviPersona(ArrayList<Persona> gentaglia, String filename)
    {
        ArrayList<String> listaStringhe=new ArrayList<>();

        try
        {
            for(Persona p: gentaglia)
            {
                listaStringhe.add(p.csv());

            }
            Files.write(Paths.get(filename), listaStringhe);
        }
        catch (Exception e) {
            System.out.println(e.getMessage());
        }
    }
    public static ArrayList<Persona> leggiPersona(String filename)
    {
        ArrayList<Persona> gentaglia=new ArrayList<>();
        try
        {
            ArrayList<String> listaStringhe=(ArrayList<String>) Files.readAllLines(Path.of(filename));
            String[] attributi;
            for(String s: listaStringhe)
            {
                attributi= s.split(";");
                gentaglia.add(new Persona(attributi[0], Integer.parseInt(attributi[1])));
            }
        }
        catch (Exception e)
        {
            System.out.println(e.getMessage());
        }
    return gentaglia;
    }
}
