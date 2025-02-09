package backEnd;

public class Manuale extends Libro
{
    private String argomento;
    private Livello grado;
    public Manuale(String autore, String titolo, int nPagine, Genere tipo, String argomento, Livello grado)
    {
        super(autore, titolo, nPagine, tipo);
        this.argomento=argomento;
        this.grado=grado;
    }
    @Override
    public String toString()
    {
        return String.format(super.toString()+" Argomento: %s, Livello: %s",argomento,grado);
    }
}