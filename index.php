<?php

    $hotels = [

        [   
            // chiave => valore
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
    // creiamo un ciclo foreach che a differenza di js avrà prima array e poi contenuto
    // prrendiamo anche le chiavi
    // foreach ($hotels as $key => $hotel)
    // var_dump($hotel);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- /Bootstrap -->
</head>
<body>
    <table class="table">
        <!-- php apertura -->
        <?php foreach ($hotels as $hotel) { ?>
            <!-- html -->
            <thead>           
                <tr>               
                    <th scope="col">Nome Hotel:</th>
                    <th><?php echo $hotel['name']; ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>  
                    <th scope="col">Descrizione:</th>         
                    <td><?php echo $hotel['description']; ?></td>
                </tr>
                <tr>  
                    <th scope="col">Parcheggio:</th>         
                    <td><?php echo $hotel['parking']; ?></td>
                </tr>
                <tr>  
                    <th scope="col">Recensioni:</th>         
                    <td><?php echo $hotel['vote']; ?></td>
                </tr>
                <tr>  
                    <th scope="col">Distanza centro:</th>         
                    <td><?php echo $hotel['distance_to_center']; ?></td>
                </tr>                           
            </tbody>
            <!-- html -->
        <?php } ?>
         <!-- php chiusura -->
    </table>
    
</body>
</html>