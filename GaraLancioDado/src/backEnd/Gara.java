
package backEnd;

public class Gara {
    boolean partitaInCorso;
    public boolean fineGara(int roundFatti, int round)
    {
        return roundFatti < round;
    }
    public String statoPartita()
    {
        if(partitaInCorso)
        {
            return "Partita in corso";
        }
        else
        {
            return "Partita Terminata";
        }
    }

    public String round(Giocatore giocatore1, Giocatore giocatore2, int lancio1, int lancio2)
    {
        if (lancio1 > lancio2)
        {
            return giocatore1.getNome() + " ha vinto il round con " + lancio1;
        }
        else if (lancio1 < lancio2)
        {
            return giocatore2.getNome() + " ha vinto il round con " + lancio2;
        }
        else
        {
            return "Round in parità con " + lancio1;
        }
    }

    public void vincitoreRound(Giocatore giocatore1, Giocatore giocatore2, int lancio1, int lancio2)
    {
        if (lancio1 > lancio2)
        {
            giocatore1.incrementaVittorie();
        }
        else if (lancio1 < lancio2)
        {
            giocatore2.incrementaVittorie();
        }
        else
        {
            giocatore1.incrementaVittorie();
            giocatore2.incrementaVittorie();
        }
    }

    public String gameWin(Giocatore giocatore1, Giocatore giocatore2)
    {
        if (giocatore1.getVittorie() > giocatore2.getVittorie())
        {
            return giocatore1.getNome() + " ha vinto! " + giocatore1.getVittorie() + " a " + giocatore2.getVittorie();
        }
        else if (giocatore1.getVittorie() < giocatore2.getVittorie())
        {
            return giocatore2.getNome() + " ha vinto! " + giocatore2.getVittorie() + " a " + giocatore1.getVittorie();
        }
        else
        {
            return "Parità!";
        }
    }
    public String base(Giocatore giocatore1, Giocatore giocatore2, int lancio1, int lancio2)
    {
        if (lancio1 > lancio2)
        {
            return giocatore1.getNome() + " ha vinto il round con " + lancio1;
        }
        else if (lancio1 < lancio2)
        {
            return giocatore2.getNome() + " ha vinto il round con " + lancio2;
        }
        else
        {
            return "Round in parità con " + lancio1;
        }
    }
    private String avanzato(Giocatore giocatore1, Giocatore giocatore2, int lancio1, int lancio2, int streak1, int streak2)
    {
        if(lancio1>lancio2)
        {
            giocatore1.incrementaVittorie();
            streak1++;
            streak2=0;
            if(streak1==3)
            {
                giocatore1.incrementaVittorie();
            }
            return giocatore1.getNome() + " ha vinto il round con " + lancio1;
        }
        else if (lancio2>lancio1)
        {
            giocatore2.incrementaVittorie();
            streak2++;
            streak1=0;
            if(streak2==3)
            {
                giocatore2.incrementaVittorie();
            }
            return giocatore2.getNome() + " ha vinto il round con " + lancio2;
        }
        else
        {
            giocatore1.incrementaVittorie();
            giocatore2.incrementaVittorie();
            streak1=0;
            streak2=0;
            return "Round in parità con " + lancio1;

        }
    }
}
