package backend;

public class Medie extends Scuola{
    public Medie(String code, String denominazione, String indirizzo, int nStudenti, int nClassi, int extraSedi, int nLaboratori) {
        super(code, denominazione, indirizzo, nStudenti, nClassi, extraSedi, nLaboratori);
    }
    @Override
    public double contributo()
    {
        return(150*getnStudenti())+(1100*getnLaboratori())+(9000*getExtraSedi());
    }
}
