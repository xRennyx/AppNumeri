package backend;

public class Romanzo extends Libro{
    private Lettarario tipologia;
    public Romanzo(String autore, String titolo, int nPagine, Genere tipo, Lettarario tipologia)
    {
        super(autore, titolo, nPagine, tipo);
        this.tipologia=tipologia;
    }
}
