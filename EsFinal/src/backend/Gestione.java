package backend;

import java.util.ArrayList;

public class Gestione {
    ArrayList<Scuola> scuole;

    public Gestione()
    {
        this.scuole = new ArrayList<>();
    }

    public ArrayList<Scuola> getScuole() {
        return scuole;
    }
    public void addScuola(Scuola s) throws Exception
    {
        boolean uguale = false;
        for (Scuola sc : scuole) {
            if (sc.getCode().equals(s.getCode())) {
                uguale = true;
            }
        }
        if (!uguale) {
            try {
                scuole.add(s.clone());
            } catch (Exception e) {
                System.out.println(e.getMessage());
            }
        } else {
            throw new Exception("Prodotto già inserito");
        }
    }
    public ArrayList<Scuola> visualizza() throws Exception {
        if (!scuole.isEmpty()) {
            ArrayList<Scuola> stampa = new ArrayList<>();
            for (Scuola s : scuole) {
                stampa.add(s);
            }
            return stampa;
        }
        throw new Exception("Non ci sono elementi");
    }
}
