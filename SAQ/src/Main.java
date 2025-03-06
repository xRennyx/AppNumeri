public class Main {
    public static void main(String[] args)
    {
        Sfera s1=new Sfera(7, 3);
        Cubo c1=new Cubo(8, 4);
        Cubo c2=new Cubo(6, 12);
        StackSolidi stack=new StackSolidi();
        QueueSolidi queue=new QueueSolidi();
        try {
            stack.push(s1);
            stack.push(c1);
            System.out.println(stack.pop());
            stack.push(c2);
            System.out.println(stack.pop());
            System.out.println(stack.pop());
        }catch (Exception e)
        {
            System.out.println(e.getMessage());
        }
        System.out.println("*****************");
        try
        {
            queue.enqueue(s1);
            queue.enqueue(c1);
            System.out.println(queue.dequeue());
            queue.enqueue(c2);
            System.out.println(queue.dequeue());
            System.out.println(queue.dequeue());
        }catch (Exception e)
        {
            System.out.println(e.getMessage());
        }
    }
}
