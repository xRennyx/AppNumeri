package backEnd;

public class Thriller extends Libro{
    private boolean TV;
    public Thriller(String autore, String titolo, int nPagine, Genere tipo, boolean TV) {
        super(autore, titolo, nPagine, tipo);
        this.TV=TV;
    }
    @Override
    public String toString()
    {
        return String.format(super.toString()+" TV: %b",TV);
    }
}
