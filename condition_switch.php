<?php

$color = "red,yellow,green";

switch ($color) {
    case "red":
        echo "тоқта";
    case "yellow":
        echo "Дайындал";
        break;
    case "red,yellow,green":
        echo "Жүре бер";
        break;
        default:
        echo "Your don't have color";
}
