<?php
class Studente{
    private string $nome;
    private int $eta;
    private static int $numero=0;
    public function setnome($nome): void
    {
        $this->nome=$nome;
    }
    public function seteta($eta): void
    {
        $this->eta=$eta;
    }
    public function saluta3(): void {
        echo "ciaooaic, sono $this->nome ed ho $this->eta anni";
    }
    public static function presentazione(): void{ //statico no funzione di istanza ma è della classe
        echo "ciao sono uno studente";
        echo '<br>';
        self::$numero++;
        echo self::$numero;
}
}
$s = new Studente();
$nome='Marco';
$eta=18;
$s->setnome($nome);
$s->seteta($eta);
$s->saluta3();
echo'<br>';
Studente::presentazione();
echo'<br>';
Studente::presentazione();
echo'<br>';
Studente::presentazione();
echo'<br>';
Studente::presentazione();
