<?php
class Prodotto{
    public $nome;
    public $prezzo;

    public function __construct($_nome, $_prezzo) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
 
}

class Cane extends Prodotto{
    public $tipoProdotto;
    public $immagine;
    public $icona;

    public function __construct($_nome, $_prezzo, $_tipoProdotto, $_immagine, $_icona) {
        parent::__construct($_nome, $_prezzo);
        $this->tipoProdotto = $_tipoProdotto;
        $this->immagine = $_immagine;
        $this->icona = $_icona;
    }
}

class Gatto extends Prodotto{
    public $tipoProdotto;
    public $immagine;
    public $icona;

    public function __construct($_nome, $_prezzo, $_tipoProdotto, $_immagine, $_icona) {
        parent::__construct($_nome, $_prezzo);
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->tipoProdotto = $_tipoProdotto;
        $this->immagine = $_immagine;
        $this->icona = $_icona;
    }
}

$arrayProdotti=[
    $ciboCane = new Cane("Croccantini", 15.99, "Cibo", "immagine-cibo-cane.jpg", "icona-cibo-cane.jpg"),
    $giocoGatto = new Gatto("Palla da gioco", 5.99, "Gioco", "immagine-gioco-gatto.jpg", "icona-gioco-gatto.jpg"),
    $guinzaglio = new Cane("Guinzaglio", 9.99, "Accessorio", "immagine-guinzaglio-cane.jpg", "icona-accessorio-cane.jpg"),
    $giocattoloGatto = new Gatto("Giocattolo per gatti", 7.99, "Gioco", "immagine-giocattolo-gatto.jpg", "icona-gioco-gatto.jpg"),
]
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($arrayProdotti as $item) : ?>
        <p><?php echo $item->nome; ?></p>
        <?php endforeach?>
    
</body>
</html>