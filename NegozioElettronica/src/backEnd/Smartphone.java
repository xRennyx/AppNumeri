package backEnd;

public class Smartphone extends ProdottoElettronico
{
    private String modello;
    private double memoriaGB;
    public Smartphone(String code, String marca, double prezzo, String modello, double memoriaGB) {
        super(code, marca, prezzo);
        this.modello=modello;
        this.memoriaGB=memoriaGB;
    }
    @Override
    public String toString()
    {
        return String.format(super.toString()+ " Modello: %s, Memoria %.1f GB, Tipo: Smartphone", modello, memoriaGB);
    }
}
