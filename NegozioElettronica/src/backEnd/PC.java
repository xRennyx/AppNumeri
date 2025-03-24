package backEnd;

public class PC extends ProdottoElettronico{
    private String processore;
    private double HDD;

    public PC(String code, String marca, double prezzo, String processore, double HDD) {
        super(code, marca, prezzo);
        this.processore=processore;
        this.HDD=HDD;
    }
    @Override
    public String toString()
    {
        return String.format(super.toString()+ " Processore: %s, HDD: %.1f GB", processore, HDD);
    }
}
