public class Cubo extends Solido{
    private double lato;
    protected Cubo(double pesoSpecifico, double lato) {
        super(pesoSpecifico);
        this.lato=lato;
    }

    @Override
    public double volume() {
        return Math.pow(lato, 3);
    }

    @Override
    public double superficie() {
        return 6*Math.pow(lato, 2);
    }
    @Override
    public String toString()
    {
        return String.format(super.toString()+" Sono un Cubo, la mia Superficie è: %.2f, il mio Volume è: %.2f",superficie(),volume());
    }
}

