<?php

    require_once __DIR__."/models/Prodotti.php";
    require_once __DIR__."/models/Cibo.php";
    require_once __DIR__."/models/Accessori.php";
    require_once __DIR__."/models/Giochi.php";

    //CIBO
    $cibo1 = new Cibo("https://m.media-amazon.com/images/I/71fwkZg9m6L.jpg", "Royal Canin Mini Adult", "Cane");
    $cibo2 = new Cibo("https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "Cane");
    $cibo3 = new Cibo("https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "Almo Nature Cat Daily Lattina", "Gatto");
    $cibo4 = new Cibo("https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "Mangime per Pesci Guppy in Fiocchi", "Pesce");

    $cibo1->setPrice(43.99);
    $cibo1->setNetWeight(545);
    $cibo1->setIngredients(["Prosciutto", "Riso"]);

    $cibo2->setPrice(44.99);
    $cibo2->setNetWeight(600);
    $cibo2->setIngredients(["Manzo", "Cereali"]);

    $cibo3->setPrice(34.99);
    $cibo3->setNetWeight(400);
    $cibo3->setIngredients(["Tonno", "Pollo", "Prosciutto"]);

    $cibo4->setPrice(2.95);
    $cibo4->setNetWeight(30);
    $cibo4->setIngredients(["Pesci e sottoprodotti di pesci", "Cereali", "Lieviti", "Alghe"]);

    // var_dump($cibo1);
    // var_dump($cibo2);
    // var_dump($cibo3);
    // var_dump($cibo4);

    //ACCESSORI
    $accessorio1 = new Accessori("https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "Voliera Wilma in Legno", "Uccello", "Legno");
    $accessorio2 = new Accessori("https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "Cartucce Filtranti per Filtro EasyCrystal", "Pesce", "Materiale espanso");

    $accessorio1->setPrice(184.99);
    $accessorio1->setSizes("M: L 83 x P 67 x H 153 cm");
    $accessorio2->setPrice(2.29);

    // var_dump($accessorio1);
    // var_dump($accessorio2);

    // GIOCHI
    $gioco1 = new Giochi ("https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "Kong Classic", "Cane", "Galleggia e rimbalza");
    $gioco2 = new Giochi ("https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "Topini di peluche Trixie", "Gatto", "Morbido con codina in corda");

    $gioco1->setPrice(13.49);
    $gioco1->setSizes("8,5 cm x 10 cm");
    $gioco2->setPrice(4.99);
    $gioco2->setSizes("8,5 cm x 10 cm");

    // var_dump($gioco1);
    // var_dump($gioco2);

    // ARRAY "CIBO"
    $cibo = [
        $cibo1,
        $cibo2,
        $cibo3,
        $cibo4
    ];

    // ARRAY "ACCESSORI"
    $accessori = [
        $accessorio1,
        $accessorio2
    ];

    // ARRAY "GIOCHI"
    $giochi = [
        $gioco1,
        $gioco2
    ];
    
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Boolshop</title>
    </head>
    <body>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h1>Boolshop</h1>
                </div>
            </div>
            <!-- Product -->
            <div class="row py-5">
                <div class="col-12">
                    <h3>I Nostri Prodotti</h3>
                </div>
                <!-- Product Food -->
                <?php foreach($cibo as $item) : ?>
                    <div class="col-12 col-md-6 col-lg-4 my-3">
                        <!-- Card -->
                        <div class="card w-100 h-100">
                            <div class="card-header p-0" style="height: 500px">
                                <img src="<?php echo $item->image ?>" class="card-img-top object-fit-cover h-100" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $item->title ?>
                                </h4>
                                <div class="card-text">
                                    <!-- Category -->
                                    <div class="my-3">
                                        <i class="fas <?php switch($item->category){
                                            case 'Cane':
                                                echo "fa-dog";
                                                break;
                                            case 'Gatto':
                                                echo "fa-cat";
                                                break;
                                            case 'Pesce':
                                                echo "fa-fish";
                                                break;
                                            case 'Uccello':
                                                echo "fa-dove";
                                                break;
                                        }?>"></i>
                                        <span>
                                            <?php echo $item->category ?>
                                        </span>
                                    </div>
                                    <!-- Price -->
                                    <div class="my-3">
                                        <?php echo "Prezzo: ".$item->getPrice() ?>
                                    </div>
                                    <!-- Net Weight -->
                                    <div class="my-3">
                                        <?php echo "Peso netto: ".$item->getNetWeight() ?>
                                    </div>
                                    <!-- Ingredients -->
                                    <div class="my-3">
                                        <?php echo "Ingredienti: ".$item->getIngredients() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Product Accessories -->
                <?php foreach($accessori as $item) : ?>
                    <div class="col-12 col-md-6 col-lg-4 my-3">
                        <!-- Card -->
                        <div class="card w-100 h-100">
                            <div class="card-header p-0" style="height: 500px">
                                <img src="<?php echo $item->image ?>" class="card-img-top object-fit-cover h-100" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $item->title ?>
                                </h4>
                                <div class="card-text">
                                    <!-- Category -->
                                    <div class="my-3">
                                        <i class="fas <?php switch($item->category){
                                            case 'Cane':
                                                echo "fa-dog";
                                                break;
                                            case 'Gatto':
                                                echo "fa-cat";
                                                break;
                                            case 'Pesce':
                                                echo "fa-fish";
                                                break;
                                            case 'Uccello':
                                                echo "fa-dove";
                                                break;
                                        }?>"></i>
                                        <span>
                                            <?php echo $item->category ?>
                                        </span>
                                    </div>
                                    <!-- Price -->
                                    <div class="my-3">
                                        <?php echo "Prezzo: ".$item->getPrice() ?>
                                    </div>
                                    <!-- Materials -->
                                    <div class="my-3">
                                        <?php echo "Materiale: ".$item->material ?>
                                    </div>
                                    <!-- Dimensions -->
                                    <div class="my-3">
                                        <?php echo "Dimensioni: ".$item->getSizes() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Product Games -->
                <?php foreach($giochi as $item) : ?>
                    <div class="col-12 col-md-6 col-lg-4 my-3">
                        <!-- Card -->
                        <div class="card w-100 h-100">
                            <div class="card-header p-0" style="height: 500px">
                                <img src="<?php echo $item->image ?>" class="card-img-top object-fit-cover h-100" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo $item->title ?>
                                </h4>
                                <div class="card-text">
                                    <!-- Category -->
                                    <div class="my-3">
                                        <i class="fas <?php switch($item->category){
                                            case 'Cane':
                                                echo "fa-dog";
                                                break;
                                            case 'Gatto':
                                                echo "fa-cat";
                                                break;
                                            case 'Pesce':
                                                echo "fa-fish";
                                                break;
                                            case 'Uccello':
                                                echo "fa-dove";
                                                break;
                                        }?>"></i>
                                        <span>
                                            <?php echo $item->category ?>
                                        </span>
                                    </div>
                                    <!-- Price -->
                                    <div class="my-3">
                                        <?php echo "Prezzo: ".$item->getPrice() ?>
                                    </div>
                                    <!-- Features -->
                                    <div class="my-3">
                                        <?php echo "Caratteristiche: ".$item->features ?>
                                    </div>
                                    <!-- Dimensions -->
                                    <div class="my-3">
                                        <?php echo "Dimensioni: ".$item->getSizes() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>