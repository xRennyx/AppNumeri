public class Main {
    public static void main(String[] args) {
        Dado dado;
        try
        {
            dado = new Dado(20);
            dado=new Dado(dado.getnFacce(), dado.lancioDado());
            System.out.println(dado.getValLancio());
        }
        catch (Exception e)
        {
            System.out.println(e.getMessage());
        }


    }
}
