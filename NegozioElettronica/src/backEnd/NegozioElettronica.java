package backEnd;

import java.util.ArrayList;

public class NegozioElettronica {
    ArrayList<Prodotto> negozio;

    public NegozioElettronica() {
        this.negozio = new ArrayList<>();
    }

    public ArrayList<Prodotto> getNegozio() {
        return negozio;
    }

    public void inserisciProdotto(Prodotto p) throws Exception {
        boolean uguale = false;
        for (Prodotto pr : negozio) {
            if (pr.equals(p)) {
                uguale = true;
            }
        }
        if (!uguale) {
            try {
                negozio.add(p.clone());
            } catch (Exception e) {
                System.out.println(e.getMessage());
            }
        } else {
            throw new Exception("Prodotto già inserito");
        }

    }

    public ArrayList<Prodotto> visualizza() throws Exception {
        if (!negozio.isEmpty()) {
            ArrayList<Prodotto> stampa = new ArrayList<>();
            for (Prodotto p : negozio) {
                stampa.add(p);
            }
            return stampa;
        }
        throw new Exception("Non ci sono elementi");
    }

    public Prodotto ricerca(String code) throws Exception {
        for (Prodotto p : negozio) {
            if (p.getCode().equals(code)) {
                return p;
            }
        }
        throw new Exception("Prodotto non trovato");
    }

    public void rimuovi(String code){
        negozio.removeIf(prodottoElettronico -> prodottoElettronico.getCode().equals(code));
    }
    public void modificaPrezzo(String code, double prezzo)
    {
        for(Prodotto p : negozio)
        {
            if(p.getCode().equals(code))
            {
                p.setPrezzo(prezzo);
            }
        }
    }
}