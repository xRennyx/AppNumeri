public class Main {
    public static void main(String[] args) {
        Docente d1 = new Docente("Fabio", "Cucu", 756, "Napoli", "Marrone", "Napoli");
        Studente s1 = new Studente("Bazaj", "Francesco", 33, "Napoli", "Nero", "Milan");
        Studente s2 = new Studente("Riccardo", "Gianesella", 33, "Napoli", "Nero", "Milan");
        Teatro t = new Teatro();
        try {
            t.entrataTeatro(d1);
            t.entrataTeatro(s1);
            t.entrataTeatro(s2);
            t.stampaAVideo();
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
        //SI INFRANGE L'INCAPSULAMENTO DEVO FARE UN CLONE NON POSSO MODIFICARE UN ELEMENTO DI TEATRO SENZA UN METODO DI TIPO TEATRO CON CLONE MODIFICO NEL MAIN MA NON LA COPIA DENTRO TEATRO
        s1.setColorePreferito("Giallo");
        System.out.println(s1.getColorePreferito());
        System.out.println("****");
        t.stampaAVideo();
        Libro libro=new Libro("Adam", "Yoshi");
        Studente s4F=new Studente("Cisco", "lollo", 930, "Firenze", "Rosso", "Fiorentina", libro);
        System.out.println("****");
        //CON CLONE NON RISPETTIAMO LINCAPSULAMENTO
        try {
            t.entrataTeatro(s4F);
            t.stampaAVideo();
        } catch (Exception e) {
            throw new RuntimeException(e);
        }
    }
}