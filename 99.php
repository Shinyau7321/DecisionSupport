<?php
for ($aa = 1; $aa <= 9; $aa++) {
    if ($aa == 1 OR $aa == 9) {
        continue;
    }
    for ($bb = 1; $bb <= 9; $bb++) {
        if ($bb == 9 OR $bb == 8 OR $bb == 6 OR $bb == 4 OR $bb == 2 OR $bb == 1) {
            echo $aa . "*" . (10 - $bb) . "=" . $aa * (10 - $bb) . " ";
        }
    }
    echo "<br>";
}
?>




