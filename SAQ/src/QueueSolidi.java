import java.util.ArrayList;

public class QueueSolidi {
    //La queue (Coda) è una struttura dati di tipo FIFO(First-In-First-Out)

    private ArrayList<Solido> queue;

    public QueueSolidi() {
        this.queue = new ArrayList<>();
    }

    public void enqueue(Solido s) throws CloneNotSupportedException
    {
        queue.add(s.clone());
    }
    public Solido dequeue()throws Exception
    {
        if(!queue.isEmpty()) {
            return queue.removeFirst();
        }
        else
        {
            throw new Exception("é vuoto");
        }

    }
}
