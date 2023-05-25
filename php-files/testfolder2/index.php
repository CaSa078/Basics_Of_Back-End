<?php
function lijst_optellen($numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        if ($number % 2 == 0)
        $sum += $number;

    }

    return $sum;

}

 

$getallenLijst = [1, 2, 3, 4];

$result = lijst_optellen($getallenLijst);

echo $result; // Output: 10
?>

<?php
function langste_woord_checken($numbers) {
    $sum = 0;

    foreach ($numbers as $number){
        if(strlen($number) > strlen($sum)){
            $sum = $number;
        }
    }

    return $sum;

}

 

$woordenLijst = ['kat', 'hond', 'olifant'];

$result = langste_woord_checken($woordenLijst);

echo $result;
?>

<?php
function lijst_sorteren($numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        if ($number % 2 == 0)
        $sum += $number;

    }

    return $sum;

}

 

$getallenLijst = [3, 1, 4, 2];

$result = lijst_sorteren($getallenLijst);

echo $result;
?>