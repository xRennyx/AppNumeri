package backEnd;

public class Gara
{
    public boolean fineGara(int roundFatti, int round)
    {
        return !(roundFatti==round);
    }
    public String round(Giocatore giocatore1, Giocatore giocatore2,Dado dado1, Dado dado2)
    {
        if(dado1.lancioDado()<dado2.lancioDado())
        {
            return giocatore2.getNome()+" ha vinto il round ha fatto "+dado2.getValLancio();
        }
        else if(dado1.lancioDado()>dado2.lancioDado())
        {
            return giocatore1.getNome()+" ha vinto il round ha fatto "+dado1.getValLancio();
        }
        else
        {
            return "Round in parità";
        }
    }
    public void vincitoreRound(Giocatore giocatore1, Giocatore giocatore2, Dado dado1, Dado dado2) {
        if (dado1.getValLancio() < dado2.getValLancio()) {
            giocatore2.incrementaVittorie();
        } else if (dado1.getValLancio() > dado2.getValLancio()) {
            giocatore1.incrementaVittorie();
        }
        else
        {
            giocatore1.incrementaVittorie();
            giocatore2.incrementaVittorie();
        }
    }


    public String gameWin(Giocatore giocatore, Giocatore giocatore2)
    {
        if(giocatore.getVittorie()<giocatore2.getVittorie())
        {
            return giocatore2.getNome()+" Ha vinto";
        }
        else if(giocatore.getVittorie()>giocatore2.getVittorie())
        {
            return giocatore.getNome()+" Ha vinto";
        }
        else
        {
            return "Parità";
        }
    }
}
