<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/> 
    <title>goedemorgen</title>
    
</head>
<body>
    <div class="container">
        <h1><?php echo greeting(); ?></h1>
        <p>Huidige tijd: <?php echo date('H:i:s'); ?></p>
    </div>
<?php
function greeting() {
    date_default_timezone_set('Europe/Amsterdam');
    $currentHour = date('H:i:s', time());

    $morningImage = 'morning.png';
    $afternoonImage = 'afternoon.png';
    $eveningImage = 'evening.png';
    $nightImage = 'night.png';

    if ($currentHour >= 6 && $currentHour < 12) {
        echo 'Goede morgen';
        $backgroundImage = $morningImage;
    } elseif ($currentHour >= 12 && $currentHour < 18) {
        echo 'Goede middag';
        $backgroundImage = $afternoonImage;
    } elseif ($currentHour >= 18 && $currentHour < 24) {
        echo 'Goede avond';
        $backgroundImage = $eveningImage;
    } else {
        echo 'Goede nacht';
        $backgroundImage = $nightImage;
    }

    echo '<style>body { background-image: url('.$backgroundImage.'); }</style>';
}
?>

    
</body>
</html>