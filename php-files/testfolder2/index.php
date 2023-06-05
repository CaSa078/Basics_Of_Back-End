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
function Worden_sorten($numbers) {
    $to_sort = true;
    while ($to_sort) {
        $to_sort = false;
        for ($x = 0; $x < count($numbers) - 1; $x++) {
            if ($numbers[$x] > $numbers[$x + 1]) {

                $temp = $numbers[$x];
                $numbers[$x] = $numbers[$x + 1];
                $numbers[$x + 1] = $temp;
                $to_sort = true;
            }
        }
    }
    return $numbers;
}

$getallenLijst = [33, 2, 4, 11, 66, 0];
$result = Worden_sorten($getallenLijst);
echo implode(', ', $result);
?>

<?php
function gcd($num1, $num2) {
    while ($num2 != 0){
        $t = $num1 % $num2;
        $num1 = $num2;
        $num2 = $t;
      }
      return $num1;

}


$lijn = gcd(8,12);

echo ($lijn);
?>