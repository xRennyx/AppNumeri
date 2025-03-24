package backEnd;

abstract public class ProdottoElettronico implements Cloneable, Prodotto
{
    private String code;
    private String marca;
    private double prezzo;

    protected ProdottoElettronico(String code, String marca, double prezzo)
    {
        this.code = code;
        this.marca = marca;
        this.prezzo = prezzo;
    }

    @Override
    public String getCode() {
        return code;
    }

    public String getMarca() {
        return marca;
    }

    public double getPrezzo() {
        return prezzo;
    }

    @Override
    public String toString()
    {
        return String.format("Codice: %s, Marca: %s, Prezzo: %.2f", code, marca, prezzo);
    }

    @Override
    public Prodotto clone() throws CloneNotSupportedException {
        return (Prodotto) super.clone();
    }
    @Override
    public boolean equals(Object obj)
    {
        if(obj instanceof  ProdottoElettronico)
        {
            return this.code.equals(((ProdottoElettronico) obj).code);
        }
        return false;
    }

    @Override
    public void setPrezzo(double prezzo) {
        this.prezzo = prezzo;
    }
}
