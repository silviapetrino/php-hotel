<?php

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Hotels</title>
</head>
<body>



      <div class="container py-5">
      <table class="table table-hover ">
        <thead>
          <tr>
            <th class="bg-primary text-white">Nome Hotel</th>
            <?php foreach($hotels as $hotel): ?>
            <th scope="col"><?php echo $hotel['name'] ?></th>
            <?php endforeach ;?>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="bg-primary text-white" scope="row">Descrizione</th>
            <?php foreach($hotels as $hotel): ?>
            <td><?php echo $hotel['description'] ?></td>
            <?php endforeach ;?>
          </tr>
          <tr>
            <th class="bg-primary text-white" scope="row">Parcheggio</th>
            <?php foreach($hotels as $hotel): ?>
            <td><?php echo ($hotel['parking']) ? ("&#10004;") : ("&#10060;") ?></td>
            <?php endforeach ;?>
          </tr>
          <tr>
            <th class="bg-primary text-white" scope="row">Voto</th>
            <?php foreach($hotels as $hotel): ?>
            <td><?php echo $hotel['vote'] ?></td>
            <?php endforeach ;?>
          </tr>
          <tr>
            <th class="bg-primary text-white" scope="row">Distanza dal centro</th>
            <?php foreach($hotels as $hotel): ?>
            <td><?php echo $hotel['distance_to_center'] ?></td>
            <?php endforeach ;?>
          </tr>


        </tbody>
      </table>
        
  </div>
</body>
</html>