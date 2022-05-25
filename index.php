<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

 <!-- Definisco classe movie e creo le variabili d'istanza  -->

 <?php

 class Movie{
/* variabili d'istanza pubbliche */
    public $nome;
    public $genere;
    public $descrizone;
    public $durata;
    public $lingua;

    function __construct($nome, $genere, $descrizione, $durata, $lingua)
    {
        $this->nome = $nome;
        $this->genere = $genere;
        $this->descrizione = $descrizione;
        $this->durata = $durata;
        $this->lingua = $lingua;

    }

    /* creiamo almeno un metodo  */
  
    function getInfoMovie()
    {
        return 'il film si chiama' .$this->name . 'fa parte del genere' .$this->genere . 'la trama è:' . $this->descrizione . 'Dura:' .$this->durata. 'La lingua attuale è:' .$this->lingua;
    }
    
   
 }

 $Hunter = new Movie('HunterxHunter', 'Anime', 'Un ragazzo va alla ricerca del padre mai conosciuto', '3 ore', 'italiano');


var_dump($Hunter);
 ?>
