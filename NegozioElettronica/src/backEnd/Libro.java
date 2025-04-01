package backEnd;

abstract public class Libro implements  Cloneable,Prodotto
{
    private String nome;
    private String descrizione;
    private String autore;
    private String codice;
    private double prezzo;
    private int quantita;

    public Libro(String nome, String descrizione, String autore, String codice, double prezzo, int quantita) {
        this.nome = nome;
        this.descrizione = descrizione;
        this.autore = autore;
        this.codice = codice;
        this.prezzo = prezzo;
        this.quantita = quantita;
    }

    @Override
    public String getCode() {
        return codice;
    }

    public String getDescrizione() {
        return descrizione;
    }

    public String getAutore() {
        return autore;
    }

    public String getNome() {
        return nome;
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
        return String.format("Nome: %s, Descrizione: %s, Autore: %s, Codice: %s, Prezzo: %.2f, Quantità: %d", nome, descrizione, autore, codice, prezzo, quantita);
    }
    @Override
    public Prodotto clone() throws CloneNotSupportedException {
        return (Prodotto) super.clone();
    }
    @Override
    public void setPrezzo(double prezzo) {
        this.prezzo = prezzo;
    }
    @Override
    public boolean equals(Object obj)
    {
        if(obj instanceof  Libro)
        {
            return this.codice.equals(((Libro) obj).codice);
        }
        return false;
    }
}
