<?php
date_default_timezone_set('Pacific/Auckland');
$year = date("Y") ;
$hour = date("H");
$currenttime = date("g:i A");
$day = date("l");
$dayNum = date("jS");
$month = date("F");

if ($hour < 12) {
    echo "Good Morning! ";
}else if ($hour >= 12 && $hour < 17){
    echo "Good Afternoon! ";
}else if ($hour >=17 && $hour < 24) {
    echo "Good Evening! ";
} else {
    echo "Good Night! ";
}
echo "<br>";
echo "It is " . $currenttime . ", ". $day . " the " . $dayNum . ". " . $month . ", " . $year;

?>