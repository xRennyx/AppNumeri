package utility;

public class GestoreTesti {
    private String testo;
    public GestoreTesti(String testo)
    {
        this.testo=testo;
    }

    public String getTesto() {
        return testo;
    }

    public void setTesto(String testo) {
        this.testo = testo;
    }

    public int StringLenght()
    {
        return this.testo.length();
    }
    public boolean verificaPresenzaParola(String parola) {
        return this.testo.contains(parola);
    }
    public String sostituisciParola(String parolaDaSostituire, String nuovaParola) {
        return this.testo.replaceAll(parolaDaSostituire, nuovaParola);
    }
}
