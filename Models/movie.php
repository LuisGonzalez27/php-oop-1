<?php
class Movie {
    // variabili
    public $title;
    public $genres;
    public $length;
    public $year;
    public $subscription;

    // constructor
    function __construct(string $_title, array $_genres, int $_length,int $_year, string $_subscription){
        $this->title = $_title;
        $this->genres = $_genres;
        $this->length = $_length;
        $this->year = $_year;
        $this->subscription = $_subscription;

        $this->subscriptionType();
    }

    // metodo per controllare il tipo di abbonamento 
    public function subscriptionType(){
        if ($this->subscription == "vip") {
            echo "Film a pagamento";
        } else {
            echo "Film gratis";
        }
    }
}

?>