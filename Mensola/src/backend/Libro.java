package backend;

public class Libro {

    private String autore;
    private String titolo;
    private int nPagine;
    private static final double costoPagina= 0.05;
    Genere tipo;
    public Libro(String autore, String titolo, int nPagine) {
        this.autore = autore;
        this.titolo = titolo;
        this.nPagine = nPagine;
    }
    public Libro(Libro l)
    {
        this.autore=l.autore;
        this.titolo=l.titolo;
        this.nPagine=l.nPagine;
        this.tipo= l.tipo;
    }

    public Libro(String autore, String titolo) {
        this.autore = autore;
        this.titolo = titolo;
    }

    @Override
    public String toString() {
        return String.format("Autore: %s, Titolo: %s, Numero pagine: %d, Genere: %s, Costo: %f", autore,titolo,nPagine,tipo, costoPagina*nPagine);
    }
    public boolean equals(Object o)
    {
        if(o instanceof Libro)
        {
            return this.autore.equals(((Libro)o).autore) && this.titolo.equals(((Libro)o).titolo);
        }
    return false;
    }

    public String getAutore() {
        return autore;
    }

    public String getTitolo() {
        return titolo;
    }

    public int getnPagine() {
        return nPagine;
    }

    public static double getCostoPagina() {
        return costoPagina;
    }
}
