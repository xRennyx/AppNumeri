import com.google.gson.Gson;
import com.google.gson.GsonBuilder;

import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.util.ArrayList;

public class Main {
    public static void main(String[] args) {
        Dipendente d1 = new Dipendente("Giuseppe",'M',"Via dei Pini 92");
        Docente d2 = new Docente("Enrico",'M',"Viale dei Mille","ITP","Informatica");
        Dipendente d3 = new Docente("Enricone",'M',"Viale dei Mille","ITP","Informatica");
        Impiegato d4 = new Impiegato("Rodolfo",'F',"Brontolo","trabajo");
        Dipendente d5 = new Impiegato("Henry",'F',"Brontolo","trabajo");
        Istituto s = new Istituto("IIS VIOLA MARCHESINI");
        try {
            s.addDipendente(d1);
            s.addDipendente(d2);
            s.addDipendente(d3);
            s.addDipendente(d4);
            s.addDipendente(d5);
            s.stampaIncentivi();
            s.stampaDipendente();
            String json;
            Gson njson = new GsonBuilder().setPrettyPrinting().create();
            json = njson.toJson(s);
            Files.write(Paths.get("Dipendenti.json"), json.getBytes());
            System.out.println(json);
            scriviImpiegato(s, "Dipendente.csv");
        } catch (Exception e){
            System.out.println(e.getMessage());
        }
    }
    public static void scriviImpiegato(Istituto s, String filename) throws IOException {
        ArrayList<String> listaStringhe= new ArrayList<>();
        for(Dipendente d : s.getScuola())
            listaStringhe.add(d.csv());
        Files.write(Paths.get(filename), listaStringhe);
    }
}