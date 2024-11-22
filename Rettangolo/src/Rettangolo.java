import java.util.ArrayList;

public class Rettangolo
{
    ArrayList<Segmento> rettangolo;
    public Rettangolo(Punto p1, Punto p2, Punto p3, Punto p4) {
        rettangolo = new ArrayList<>();

        rettangolo.add(new Segmento(p1, p2));
        rettangolo.add(new Segmento(p2, p3));
        rettangolo.add(new Segmento(p3, p4));
        rettangolo.add(new Segmento(p4, p1));
    }

public ArrayList<Segmento> getRettangolo() {
    return rettangolo;
}

public double calcolaPerimetro() {
    double perimetro = 0;
    for (Segmento segmento : rettangolo) {
        perimetro += segmento.calcolaLunghezza();
    }
    return perimetro;
}
    public double calcolaArea()
    {
        double base = rettangolo.get(0).calcolaLunghezza();
        double altezza = rettangolo.get(1).calcolaLunghezza();
        return base * altezza;
    }
}

