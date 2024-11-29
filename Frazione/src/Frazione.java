public class Frazione
{
    private int numeratore;
    private int denominatore;

    public int getNumeratore() {
        return numeratore;
    }

    public int getDenominatore() {
        return denominatore;
    }
    public Frazione(int numeratore, int denominatore) throws Exception {
        this.numeratore = numeratore;
        this.denominatore = denominatore;
        if(denominatore==0)
        {
            throw new Exception("Denominatore non può essere uguale a 0");
        }
    }
    public static int calcolaMCM(int a, int b) {
        int mcm = Math.max(a, b);
        while (mcm % a != 0 || mcm % b != 0) {
            mcm++;
        }

        return mcm;
    }
    public Frazione somma(Frazione f2)throws Exception
    {
        int mcm = calcolaMCM(this.denominatore, f2.denominatore);

        int nuovoNum1 = this.numeratore * (mcm / this.denominatore);
        int nuovoNum2 = f2.numeratore * (mcm / f2.denominatore);

        int sommaNumeratore = nuovoNum1 + nuovoNum2;

        return new Frazione(sommaNumeratore, mcm);
    }
}
