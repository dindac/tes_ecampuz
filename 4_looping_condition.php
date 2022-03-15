<?php
foreach(range(1, 50) as $x){
    if ($x % 3 == 0 && $x % 5 == 0) {
        echo $x . 'foo bar <br>';
        continue;
    }
    else if($x % 3 == 0){
        echo "$x  ";echo "foo <br>";
    }
    else if ($x % 5 == 0){
        echo "$x  ";echo "bar <br>";
    }
    else {
        echo $x;
        echo "<br />";
    }
}
?>
