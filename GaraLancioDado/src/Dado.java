import java.util.Random;

public class Dado
{
    private int nFacce;
    private int valLancio;

    public Dado(int nFacce) {
        this.nFacce = nFacce;
    }

    public Dado(int nFacce, int valLancio)throws Exception
    {

        if(nFacce<=20 && nFacce>3)
        {
            this.nFacce = nFacce;
            this.valLancio=lancioDado();
        }
        else
        {
            throw new Exception("Non esistono dadi con quel numero di facce");
        }
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
        return valLancio=rn.nextInt(nFacce);
    }
}
