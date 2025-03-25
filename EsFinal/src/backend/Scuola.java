package backend;

abstract public class Scuola
{
    private String code;
    private String denominazione;
    private String indirizzo;
    private int nStudenti;
    private int nClassi;
    private int extraSedi;
    private int nLaboratori;

    public Scuola(String code, String denominazione, String indirizzo, int nStudenti, int nClassi, int extraSedi, int nLaboratori) {
        this.code = code;
        this.denominazione = denominazione;
        this.indirizzo = indirizzo;
        this.nStudenti = nStudenti;
        this.nClassi = nClassi;
        this.extraSedi = extraSedi;
        this.nLaboratori = nLaboratori;
    }

    public String getCode() {
        return code;
    }

    public String getDenominazione() {
        return denominazione;
    }

    public String getIndirizzo() {
        return indirizzo;
    }

    public int getnStudenti() {
        return nStudenti;
    }

    public int getnClassi() {
        return nClassi;
    }

    public int getExtraSedi() {
        return extraSedi;
    }

    public int getnLaboratori() {
        return nLaboratori;
    }
    abstract public double contributo();
    @Override
    public String toString()
    {
        return String.format("Codice: %s, Denominazione: %s, Indirizzo: %s, Numero Studneti: %d, Numero Classi: %s, Numero Sedi: %d, Numero Laboratori: %d, Contributo: %.2f", code, denominazione, indirizzo, nStudenti, nClassi, extraSedi,nLaboratori, contributo());
    }
}
