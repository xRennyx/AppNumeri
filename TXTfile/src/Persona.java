import java.nio.file.Files;
import java.nio.file.Paths;
import java.util.ArrayList;

public class Persona
{
    private String nome;
    private int eta;

    public Persona(String nome, int eta) {
        this.nome = nome;
        this.eta = eta;
    }

    @Override
    public String toString() {
        return String.format("Nome: %s, Eta: %d", nome, eta);
    }
    public String csv()
    {
        return String.format("%s; %d",nome,eta);
    }

}