package backend;

public class Tecnico extends Scuola{
    public Tecnico(String code, String denominazione, String indirizzo, int nStudenti, int nClassi, int extraSedi, int nLaboratori) {
        super(code, denominazione, indirizzo, nStudenti, nClassi, extraSedi, nLaboratori);
    }
    @Override
    public double contributo() {
        return (3500*getnClassi())+ (6000*getnLaboratori());
    }
}
