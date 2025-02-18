package backEnd;

import java.util.Random;

public class Dado
{
    private int nFacce;
    private int valLancio;

    public Dado(int nFacce) {
        this.nFacce = nFacce;
    }

    public Dado(int nFacce, int valLancio)
    {
        this.nFacce = nFacce;
        this.valLancio=valLancio;
    }

    public int getnFacce() {
        return nFacce;
    }

    public int getValLancio() {
        return valLancio;
    }
    public int lancioDado()
    {
        Random rn=new Random();
        return valLancio=rn.nextInt(1,nFacce+1);
    }
}