<?php
class Prodotto
{
    public $nome;
    public $prezzo;

    public function __construct($_nome, $_prezzo)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
}

class Cane extends Prodotto
{
    public $tipoProdotto;
    public $immagine;
    public $icona;

    public function __construct($_nome, $_prezzo, $_tipoProdotto, $_immagine, $_icona)
    {
        parent::__construct($_nome, $_prezzo);
        $this->tipoProdotto = $_tipoProdotto;
        $this->immagine = $_immagine;
        $this->icona = $_icona;
    }
}

class Gatto extends Prodotto
{
    public $tipoProdotto;
    public $immagine;
    public $icona;

    public function __construct($_nome, $_prezzo, $_tipoProdotto, $_immagine, $_icona)
    {
        parent::__construct($_nome, $_prezzo);
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->tipoProdotto = $_tipoProdotto;
        $this->immagine = $_immagine;
        $this->icona = $_icona;
    }
}

$arrayProdotti = [
    $ciboCane = new Cane("Croccantini", 15.99, "Cibo", "https://www.ecologia24.it/images/news/2021/02/569689710_thg.jpg", "fa-solid fa-dog"),
    $giocoGatto = new Gatto("Pallina", 5.99, "Gioco", "https://blupanda.shop/cdn/shop/files/622976683_max.jpg?v=1696949309&width=1445", "fa-solid fa-cat"),
    $guinzaglio = new Cane("Guinzaglio", 9.99, "Accessorio", "https://cdn.shopify.com/s/files/1/2732/1312/products/guinzaglio-gommato-sky_900x.png?v=1606805854", "fa-solid fa-dog"),
    $giocattoloGatto = new Gatto("Topo", 7.99, "Gioco", "https://us.123rf.com/450wm/svetilos/svetilos2306/svetilos230600004/205749733-il-gatto-domestico-rosso-gioca-con-un-topo-giocattolo-isolato-su-uno-sfondo-bianco.jpg?ver=6", "fa-solid fa-cat"),
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
        <div id="box" class="d-flex pattern-text align-items-center justify-content-center">
            <h1 class=" text">Animal Shop</h1>
        </div>
    </header>
    
    <main style="height: 80vh;" class="text-light fs-5">
      <div style="height: 100%;" class="container">
            <div style="height: 100%;" class="row d-flex gap-2">
                <?php foreach ($arrayProdotti as $item) : ?>
                    <div id="card" class="col-3">
                        <div style="width: 100%; height: 100%" class="d-flex flex-column ">
                            <div style="height: 80%; width:100%" class=" position-relative ">
                                <img style="width: 100%; height:100%" src="<?php echo $item->immagine; ?>" alt="">
                                    <i class="<?php echo $item->icona; ?> position-absolute p-1"></i>
                            </div>
                            <div  class="d-flex justify-content-between pt-4">
                                <span><?php echo $item->nome; ?></span>
                                <span>€<?php echo $item->prezzo; ?></span>
                            </div>
                            
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>  
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>