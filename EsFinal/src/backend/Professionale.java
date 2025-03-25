package backend;

public class Professionale extends Scuola{
    public Professionale(String code, String denominazione, String indirizzo, int nStudenti, int nClassi, int extraSedi, int nLaboratori) {
        super(code, denominazione, indirizzo, nStudenti, nClassi, extraSedi, nLaboratori);
    }
    @Override
    public double contributo() {
        return (2400*getnClassi())+(3000*getnLaboratori());
    }
}
