package backEnd;

import java.util.ArrayList;

public class NegozioElettronica
{
    ArrayList<ProdottoElettronico> negozio;

    public NegozioElettronica() {
        this.negozio = new ArrayList<>();
    }

    public ArrayList<ProdottoElettronico> getNegozio() {
        return negozio;
    }

    public void inserisciProdotto(ProdottoElettronico p)throws Exception
    {
        boolean uguale=false;
        for (ProdottoElettronico pr: negozio)
        {
            if(pr.equals(p))
            {
                uguale=true;
            }
        }
        if(!uguale)
        {
            try
            {
                negozio.add(p.clone());
            }
            catch (CloneNotSupportedException e)
            {
                System.out.println(e.getMessage());
            }
        }
        else {
            throw new Exception("Prodotto già inserito");
        }

    }
    public ArrayList<ProdottoElettronico> visualizza() throws Exception
    {
        if(!negozio.isEmpty()) {
            ArrayList<ProdottoElettronico> stampa = new ArrayList<>();
            for (ProdottoElettronico p : negozio) {
                stampa.add(p);
            }
            return stampa;
        }
        throw new Exception("Non ci sono elementi");
    }
    public ProdottoElettronico ricerca(String code)throws Exception
    {
        for(ProdottoElettronico p: negozio)
        {
            if(p.getCode().equals(code))
            {
                return p;
            }
        }
        throw new Exception("Prodotto non trovato");
    }
    public void rimuovi(String code)
    {
        negozio.removeIf(prodottoElettronico -> prodottoElettronico.getCode().equals(code));
    }
}
