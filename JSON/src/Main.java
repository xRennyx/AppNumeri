import com.google.gson.Gson;
import com.google.gson.GsonBuilder;
//bravo continua così 
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.ArrayList;
import java.util.Arrays;

public class Main {
    public static void main(String[] args) {
        Gson tgson=new Gson();
        Persona p=new Persona("Giovanni", 30);
        String json= tgson.toJson(p); //serializzazione
        System.out.println(json);
        Persona fromjson= tgson.fromJson(json, Persona.class);
        System.out.println(fromjson.toString());
        ArrayList<Persona> persone= new ArrayList<>();
        persone.add(new Persona("Carlo", 12));
        persone.add(new Persona("Stefano", 21));
        persone.add(new Persona("Giacomo", 22));
        persone.add(new Persona("Matteo", 23));
        //SERIALIZZAZIONE DELLA COLLEZIONE PERSONE SU FILE JSON
        Gson njson=new GsonBuilder().setPrettyPrinting().create();
        String jsonContent=njson.toJson(persone);
        System.out.println(jsonContent);

        try
        {
            Files.write(Paths.get("persone.json"), jsonContent.getBytes());
        }catch(Exception e)
        {
            System.out.println(e.getMessage());
        }

        try
        {
            byte[] jsonData=Files.readAllBytes(Path.of("persona.json"));
            Persona[] collezione= tgson.fromJson(new String(jsonData),Persona[].class);
            ArrayList<Persona> archivio= new ArrayList<>(Arrays.asList(collezione));
            System.out.println(archivio.toString());
        }catch (Exception e)
        {
            System.out.println(e.getMessage());
        }
    }
}
