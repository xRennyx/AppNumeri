import java.time.LocalTime;
import java.util.Timer;
public class Cronometro {
    private LocalTime startime;
    private LocalTime endtime;
    private int tempoGiro;

    public Cronometro() {
        setStartime();
       setEndtime();
    }

    public int getTempoGiro() {
        return tempoGiro;
    }

    public void setStartime() {
        this.startime = LocalTime.now();
    }

    public void setEndtime() {
        this.endtime = LocalTime.now();
    }
    int calcolaIntTimer() throws Exception
    {
        int TempoGiro;
        TempoGiro=this.endtime.toSecondOfDay() - this.startime.toSecondOfDay();
        if(TempoGiro==0)
        {
            throw new Exception("Cronometro Stop");
        }
    return this.tempoGiro=TempoGiro;
    }

    @Override
    public String toString() {
        return String.format("Tempo: %d", tempoGiro);
    }
}
