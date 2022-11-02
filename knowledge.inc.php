<?php
$string_this = "White-hacker";
$integer_this = 50;
function get_integer()
{
    global $integer_this;
    if ($integer_this > 30 && $integer_this < 150) {
        return "$integer_this лежит в промежутке от 30 до 150";
    }
    else {
        return "$integer_this не лежит в промежутке от 30 до 150";
    }
}
?>