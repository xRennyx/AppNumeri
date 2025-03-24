package backEnd;

abstract public class Libro implements Prodotto
{
    private String nome;
    private String descrizione;
    private String autore;
    private int ISBN;
    private double prezzo;
    private int quantita;

    public Libro(String nome, String descrizione, String autore, int ISBN, double prezzo, int quantita) {
        this.nome = nome;
        this.descrizione = descrizione;
        this.autore = autore;
        this.ISBN = ISBN;
        this.prezzo = prezzo;
        this.quantita = quantita;
    }

    @Override
    public String getCode() {
        return nome;
    }

    public String getDescrizione() {
        return descrizione;
    }

    public String getAutore() {
        return autore;
    }

    public int getISBN() {
        return ISBN;
    }

    public double getPrezzo() {
        return prezzo;
    }

    public int getQuantita() {
        return quantita;
    }
    @Override
    public String toString()
    {
        return String.format("Nome: %s, Descrizione: %s, Autore: %s, ISBN: %d, Prezzo: %.2f, Quantità: %d", nome, descrizione, autore, ISBN, prezzo, quantita);
    }
    @Override
    public Prodotto clone() throws CloneNotSupportedException {
        return (Prodotto) super.clone();
    }
    @Override
    public void setPrezzo(double prezzo) {
        this.prezzo = prezzo;
    }
}
