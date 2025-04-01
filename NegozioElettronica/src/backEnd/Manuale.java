package backEnd;

public class Manuale extends Libro
{
    private String argomento;

    public Manuale(String nome, String descrizione, String autore, String code, double prezzo, int quantita, String argomento) {
        super(nome, descrizione, autore, code, prezzo, quantita);
        this.argomento=argomento;

    }
    @Override
    public String toString()
    {
        return String.format(super.toString()+" Argomento: %s, Tipo: Manuale",argomento);
    }
}
