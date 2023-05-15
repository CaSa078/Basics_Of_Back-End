<?php
function tafelvan($getal) {
    echo "Tafel van $getal:<br>";
    for ($i = 1; $i <= 10; $i++) {
        $resultaat = $getal * $i;
        echo "$getal x $i = $resultaat<br>";
    }
    echo "<br>";
}
tafelvan(6);

$waardes = [3, 5, 8, 12];

foreach ($waardes as $getal) { // die as is net als for x in lijst in python maar nu dan in php
    tafelvan($getal);
}

?>
