package backEnd;

import java.util.ArrayList;

/**
 * Classe negozio per la gestione del negozio
 * @author Francesco Renesto
 * @version 1.0
 * @since 31/03/2025
 */
public class NegozioElettronica {
    ArrayList<Prodotto> negozio;

    /**
     *
     */
    public NegozioElettronica() {
        this.negozio = new ArrayList<>();
    }

    /**
     *
     * @return Arraylist</Prodotto>
     */
    public ArrayList<Prodotto> getNegozio() {
        return negozio;
    }

    /**
     *
     * @param p
     * @throws Exception
     */
    public void inserisciProdotto(Prodotto p) throws Exception {
        boolean uguale = false;
        for (Prodotto pr : negozio) {
            if (pr.getCode().equals(p.getCode())) {
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

    /**
     *
     * @return Arraylist</Prodotto>
     * @throws Exception
     */
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

    /**
     *
     * @param code
     * @return
     * @throws Exception
     */
    public Prodotto ricerca(String code) throws Exception {
        for (Prodotto p : negozio) {
            if (p.getCode().equals(code)) {
                return p;
            }
        }
        throw new Exception("Prodotto non trovato");
    }

    /**
     *
     * @param code
     */

    public void rimuovi(String code){
        negozio.removeIf(prodottoElettronico -> prodottoElettronico.getCode().equals(code));
    }

    /**
     *
     * @param code
     * @param prezzo
     */
    public void modificaPrezzo(String code, double prezzo)throws Exception
    {
        boolean trovato=false;
        for(Prodotto p : negozio)
        {
            if(p.getCode().equals(code))
            {
                p.setPrezzo(prezzo);
                trovato=true;
            }
        }
        if(trovato==false)
        {
            throw new Exception("Prodotto non trovato");
        }
    }
}