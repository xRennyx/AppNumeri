package backEnd;

public class Romanzo extends Libro{
    private Letterario tipologia;
    public Romanzo(String autore, String titolo, int nPagine, Genere tipo, Letterario tipologia)
    {
        super(autore, titolo, nPagine, tipo);
        this.tipologia=tipologia;
    }
    @Override
    public String toString()
    {
        return String.format(super.toString()+" Tipologia: %s",tipologia);
    }
}