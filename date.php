<?php

echo "Today is 1" . date("d"). "<br>";

echo "Today is 2" . date("jS"). "<br>";

echo "Today is 3" . date("jS"). "<br>";

echo "Month is 4" . date("F"). "<br>";

echo "Month is 5" . date("m"). "<br>";

echo "Month is 6" . date("n"). "<br>";

echo "Month is 7" . date("M"). "<br>";

echo "Year is 8" . date("Y"). "<br>";

echo "Year is 9" . date("y"). "<br>";

echo "Full Date is 10" . date("d/m/Y"). "<br>";

echo "Full Date is 11" . date("Y-m-d"). "<br>";

echo "Full Date is 12" . date("Y-M-d"). "<br>";

echo "Week Day is 13" . date("D"). "<br>";

echo "Week Day is 14" . date("l"). "<br>";

echo "Week Day is 15" . date("N"). "<br>";

echo "Week Day is 16" . date("w"). "<br>";

echo "Day is 17" . date("z"). "<br>";

echo "Week of the year " . date("W"). "<br>";

echo "Days of the Month " . date("t"). "<br>";

echo "Is this is Leap year" . date("L"). "<br>";

echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A") . "<br>";

// Prints October 3, 1975 was on a Friday
echo "Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br>";

// Use a constant in the format parameter
echo date(DATE_RFC822) . "<br>";

// prints something like: 1975-10-03T00:00:00+00:00
echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));
?>
