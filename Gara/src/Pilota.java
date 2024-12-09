public class Pilota
{
    private String nome;
    private String cognome;
    private String nazionalita;

    public Pilota(String nome, String cognome) throws Exception
    {
        if(isValue(nome) && isValue(cognome)) {
            this.nome = nome;
            this.cognome = cognome;
        }
        else
        {
            throw new Exception("Caselle vuote");
        }
    }

    public String getNome() {
        return nome;
    }

    public String getCognome() {
        return cognome;
    }

    public String getNazionalita() {
        return nazionalita;
    }

    public void setNazionalita(String nazionalita) {
        this.nazionalita = nazionalita;
    }

    @Override
    public String toString() {
        return String.format("Nome: %s, Cognome: %s, Nazionalità: %s", nome, cognome, nazionalita);
    }

    @Override
    public boolean equals(Object obj) {
        if(obj instanceof Pilota)
        {
            return this.nome.equals(((Pilota) obj).nome) && this.cognome.equals(((Pilota) obj).cognome) && this.nazionalita.equals(((Pilota) obj).nazionalita);
        }
        else
        {
            throw new ClassCastException("Non sono lo stesso tipo");
        }
    }
    private boolean isValue(String a)
    {
        return !a.isEmpty();
    }
}
