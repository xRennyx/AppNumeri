public class Scuderia
{
    private String nome;
    private Pilota p;
    private int nAuto;
    private int cronometro;

    public Scuderia(String nome, Pilota p, int nAuto) {
        this.nome = nome;
        this.p = p;
        this.nAuto = nAuto;
    }

    public String getNome() {
        return nome;
    }

    public Pilota getP() {
        return p;
    }

    public int getnAuto() {
        return nAuto;
    }

    public int getCronometro() {
        return cronometro;
    }

    public void setCronometro(int cronometro) {
        this.cronometro = cronometro;
    }
    @Override
    public String toString() {
        return String.format("Nome Scuderia: %s, Nome Pilota: %s, Cognome Pilota: %s, Numero Auto: %d, Tempo del Giro: %d secondi", nome, p.getNome(), p.getCognome(), nAuto, cronometro);
    }
}