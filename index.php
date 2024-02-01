<?Php
class item
{
     public $name;
     public $price;
     public $img;
     public $Animal;

     function __construct($name, $price, $img, Animal $Animal)
     {
          $this->name = $name;
          $this->price = $price;
          $this->img = $img;
          $this->Animal = $Animal;
     }
}


class cibo extends item
{
     public $qt;
     public $bio;
     function __construct($name, $price, $img, Animal $Animal, $qt, $bio)
     {
          parent::__construct($name, $price, $img, $Animal);
          $this->qt = $qt;
          $this->bio = $bio;
     }
}


class giochi extends item
{
     public $dimensioni;
     public $type;
     function __construct($name, $price, $img, Animal $Animal, $dimensioni, $type)
     {
          parent::__construct($name, $price, $img, $Animal, );
          $this->dimensioni = $dimensioni;
          $this->type = $type;
     }
}
;

class acessori extends item
{
     public $dimensioni;
     public $materiale;

     function __construct($name, $price, $img, Animal $Animal, $dimensioni, $materiale)
     {
          parent::__construct($name, $price, $img, $Animal);
          $this->dimensioni = $dimensioni;
          $this->materiale = $materiale;
     }
}

class Animal
{
     public $name;
     public $icon;
     public function __construct($name, $icon)
     {
          $this->name = $name;
          $this->icon = $icon;
     }
}


$animali = [
     'cane' => new Animal('Cane', 'fas fa-dog'),
     'gatto' => new Animal('gatto', 'fas fa-cat'),
     'Uccello' => new Animal('Uccello', 'fas fa-dove'),
     'pesce' => new Animal('pesce', 'fas fa-fish'),
];


$prodotti = [
     new cibo('Royal canin Mini Adult', 34.34, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', $Animali['cane'], "550g", 'bio'),
     new cibo('  Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 35.35, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', $Animali['gatto'], "550g", 'non bio'),
     new cibo(' Almo Nature Cat Daily Lattina', 35.35, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', $Animali['gatto'], "550g", 'bio'),
     new cibo('Mangime per Pesci Guppy in Fiocchi', 14.34, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', $Animali['pesce'], "150g", 'bio'),
     new acessori('Voliera Wilma in Legno', 114.34, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', $Animali['cane'], "40cm", 'legno'),
     new acessori('Cartucce Filtranti per Filtro EasyCrystal', 11.34, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', $Animali['cane'], "10cm", 'Crystal'),
     new giochi('Kong Classic', 114.34, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', $Animali['cane'], "32cm", 'legno'),
     new giochi('opini di peluche Trixie', 114.34, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', $Animali['cane'], "412cm", 'legno')

]

     ?>




<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <script src="https://kit.fontawesome.com/2d1645b189.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"></script>
</head>

<body>


</body>

</html>