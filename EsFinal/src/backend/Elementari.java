package backend;

public class Elementari extends Scuola{

    public Elementari(String code, String denominazione, String indirizzo, int nStudenti, int nClassi, int extraSedi, int nLaboratori) {
        super(code, denominazione, indirizzo, nStudenti, nClassi, extraSedi, nLaboratori);
    }

    @Override
    public double contributo() {

        return (125*getnStudenti())+(9000*getExtraSedi());
    }
}
