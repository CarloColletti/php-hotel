<?php 

    // Descrizione
    // Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
    // Stampare tutti i nostri hotel con tutti i dati disponibili.
    // Iniziate in modo graduale.
    // Prima stampate in pagina i dati, senza preoccuparvi dello stile.
    // Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
    // Bonus
    // 1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
    // 2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
    // NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
    // Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- foglio di stile  -->
    <link rel="stylesheet" href="./style.css">

    <title>Document</title>
</head>
<body>  
    <h1>
        Lista Hotels:
    </h1>
    
    <div class="container">
        
        <!-- <div class="row">
            <div class="col-12">
                <form method="get" action="./greetings.php"></form>
            </div>
        </div> -->



        <div class="row row-cols-4 gap-2 justify-content-center">
            <?php foreach($hotels as $hotel_card) { ?>
                <div class="col d-flex flex-column card-p">
                    <?php foreach($hotel_card as $hotel) { ?>
                        <span class="py-2"><?= $hotel ?></span>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>


    
</body>
</html>