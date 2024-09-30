import static utility.Tools.*;
import java.util.Scanner;
import java.util.Random;

public class l {
    public static void main(String[] args) {
        Scanner tastiera = new Scanner(System.in);
        String[] opzioni = {"Menu", "1 Genera Random", "2 Visualizzazione", "3 Elimina Numero", "4 Stampa i Pari", "5 Fine"};
        boolean esci = true;
        int[] nEstratti = null;
        final int MAXNUMERI = 10;
        int[] nEstratti2 = new int[MAXNUMERI];
        int dimensioneAttuale=nEstratti2.length;
        //int[] nEstratti2;
        do {
            switch (menu(opzioni, tastiera)) {
                case 1-> {
                    System.out.println("Generazione");
                /*for (int i=0; i<MAXNUMERI; i++)
                    nGenerati[i] = numeroRandom.nextInt(0,MAXNUMERI)+1;
                 */
                    generaNumeri2(nEstratti2);
                }
                case 2->
                {
                    System.out.println("Visualizzazione");
                    for (int i = 0; i < nEstratti2.length; i++) {
                        System.out.println(nEstratti2[i]);
                    }
                }
                case 3->
                {
                    System.out.println("Inserisci numero da cancellare ");
                    int numeroDaCancellare = Integer.parseInt(tastiera.nextLine());
                    boolean risultato = cancellaNumeroRicompattando(nEstratti2, numeroDaCancellare, dimensioneAttuale);

                    if (risultato)
                    {
                        System.out.println("Il numero " + numeroDaCancellare + " è stato cancellato.");
                        // Visualizza il vettore modificato
                        System.out.print("Vettore dopo la cancellazione:\n ");
                        for (int i = 0; i < dimensioneAttuale - 1; i++)
                        {
                            System.out.println(nEstratti2[i]);
                        }
                    }
                    else
                    {
                        System.out.println("Il numero " + numeroDaCancellare + " non è presente nel vettore.");
                    }
                }
                case 4->
                {
                    System.out.println("Numeri Pari");
                    int[] arrayPari=vettorePari(nEstratti2);
                    for(int i=0; i<arrayPari.length; i++)
                        System.out.println(arrayPari[i]);
                }
                case 5->
                {
                    raddoppiaVettore(nEstratti2, MAXNUMERI);
                    int[] vettoreGrosso=raddoppiaVettore(nEstratti2, MAXNUMERI);
                    for(int i=0; i<vettoreGrosso.length; i++)
                    {
                        System.out.println(vettoreGrosso[i]);
                    }
                }
                case 6-> {
                    System.out.println("Fine");
                    esci = false;
                }
            }
        } while (esci);
    }

    public static int[] generaNumeri(int nNumeri) {
        Random numeroRandom = new Random();
        int[] nGenerati = new int[nNumeri];
        for (int i = 0; i < nNumeri; i++)
            nGenerati[i] = numeroRandom.nextInt(0, 100)+1;
        return nGenerati;
    }
    public static void generaNumeri2(int[] vettore) {
        Random numeroRandom = new Random();
        int i=0;
        while (i < vettore.length) {
            int numero = numeroRandom.nextInt(1, 100 + 1);
            boolean duplicato = false;


            for (int j = 0; j < i; j++) {
                if (vettore[j] == numero) {
                    duplicato = true;
                    break;
                }
            }

            if (!duplicato) {
                vettore[i] = numero;
                i++;
            }
        }
    }
    public static boolean cancellaNumeroRicompattando(int[] vettore, int numeroDaCancellare, int dimensioneAttuale) {
        int index = -1;

        // Trova l'indice del numero da cancellare
        for (int i = 0; i < dimensioneAttuale; i++) {
            if (vettore[i] == numeroDaCancellare) {
                index = i;
            }
        }

        // Se il numero non è stato trovato
        if (index == -1) {
            return false;
        }

        // Sposta gli elementi a sinistra per ricompattare l'array
        for (int i = index; i < dimensioneAttuale - 1; i++) {
            vettore[i] = vettore[i + 1];
        }

        // La dimensione logica dell'array è diminuita di 1
        dimensioneAttuale--;

        return true;
    }
    public static int trovaNumero(int num, int[] vet)
    {
        for(int i=0; i< vet.length; i++)
        {
            if(vet[i]==num)
            {
                return i;
            }
        }
        return -1;
    }
    public static int [] vettorePari(int [] vettore)
    {
        int contapari=0;
        for(int i=0; i< vettore.length; i++)
        {
            if(vettore[i]%2==0)
            {
                contapari++;
            }
        }
        int [] arrayPari=new int[contapari];
        int j=0;
        for(int i=0; i<vettore.length; i++)
        {
            if(vettore[i]%2==0)
            {
                arrayPari[j]=vettore[i];
                j++;
            }
        }
    return arrayPari;
    }
    public static int [] raddoppiaVettore (int[] vettore, int MAXNumeri)
    {
        Random numeroRandom = new Random();
        int nMAXNUMERI=MAXNumeri*2;
        int[] vettoreGrosso= new int[nMAXNUMERI];
        int i=MAXNumeri;
        for(int k=0; k<vettore.length; k++)
        {
            vettoreGrosso[k]=vettore[k];
        }
        while (i < vettoreGrosso.length)
        {
            int numero = numeroRandom.nextInt(1, 100 + 1);
            boolean duplicato = false;


            for (int j = 0; j < i; j++) {
                if (vettoreGrosso[j] == numero)
                {
                    duplicato = true;
                    break;
                }
            }

            if (!duplicato) {
                vettoreGrosso[i] = numero;
                i++;
            }
        }

    return vettoreGrosso;
    }

}
