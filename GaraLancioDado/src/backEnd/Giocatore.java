package backEnd;

public class Giocatore {
    private String nome;
    private int vittorie=0;

    public Giocatore(String nome) {
        this.nome = nome;
    }

    public String getNome() {
        return nome;
    }

    public int getVittorie() {
        return vittorie;
    }

    public void setVittorie(int vittorie) {
        this.vittorie = vittorie;
    }
}
