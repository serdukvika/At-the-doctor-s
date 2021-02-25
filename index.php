<?php
$x = rand(250, 420) /10;
if($x > 37){
    echo "<div style='color:red;'>$x Болен!</div>";
}
elseif ($x <= 37 && $x > 33){
    echo "<div style='color:green;'>$x Здоров!</div>";
}
else {
    echo "<div style='color:blue;'>$x Ты замерз!</div>";
}