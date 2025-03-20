abstract public class Solido implements Cloneable, CorpoSolido
{
    private double pesoSpecifico;

    protected Solido(double pesoSpecifico) {
        this.pesoSpecifico = pesoSpecifico;
    }

    public double getPesoSpecifico() {
        return pesoSpecifico;
    }

    public void setPesoSpecifico(double pesoSpecifico) {
        this.pesoSpecifico = pesoSpecifico;
    }

    abstract public double volume();

    abstract public double superficie();

    @Override
    public double peso()
    {
        return pesoSpecifico*volume();
    }

    @Override
    public String toString()
    {
        return String.format("Sono un Solido");
    }

    @Override
    public Solido clone() throws CloneNotSupportedException {
        return (Solido) super.clone();
    }
}