package backend;

import java.util.ArrayList;

public class NonSoComeChiamarla {
    ArrayList<Scuola> scuole;

    public NonSoComeChiamarla(ArrayList<Scuola> scuole)
    {
        this.scuole = new ArrayList<>();
    }

    public ArrayList<Scuola> getScuole() {
        return scuole;
    }
    public void addScuola(Scuola s)
    {

    }
    public void calcolaContributo()
    {
        for(Scuola s: this.scuole)
        {
            s.contributo();
        }
    }
}
