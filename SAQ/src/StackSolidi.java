import java.util.ArrayList;

public class StackSolidi {
    //Lo stack (Pila) è una struttura dati che adotta una politica di tipo LIFO(Last-In-First-Out), ovvero
    //l'ultimo elemento ad essere inserito è il primo ad essere rimosso

    private ArrayList<Solido> stack;

    public StackSolidi() {
        this.stack = new ArrayList<>();
    }

    public void push(Solido s) throws CloneNotSupportedException
    {
        stack.add(s.clone());
    }
    public Solido pop()throws Exception
    {
        if(!stack.isEmpty()) {
            return stack.removeLast();
        }
        else
        {
            throw new Exception("é vuoto");
        }

    }
}
