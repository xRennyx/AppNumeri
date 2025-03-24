package backEnd;

public interface Prodotto
{
    String getCode();
    Prodotto clone() throws CloneNotSupportedException;
    void setPrezzo(double prezzo);

}
