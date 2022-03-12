<?php
/*----Time Functions------- */
echo "Hour is " . date("h"). "<br>";

echo "Hour is " . date("H"). "<br>";

echo "Hour is " . date("g"). "<br>";

echo "Hour is " . date("G"). "<br>";

echo "Minutes is " . date("i"). "<br>";

echo "Seconds is " . date("s"). "<br>";

echo "Meridiem is " . date("a"). "<br>";

echo "Meridiem is " . date("A"). "<br>";

echo "Time is " . date("h:i:sa e"). "<br>";

echo "Time & Date is " . date("d-m-Y h:i:sa"). "<br>";

date_default_timezone_set("Asia/Kolkata");
echo "Time is " . date("h:i:sa e"). "<br>";

/*------MK Time Function------- */
echo "Time & Date : " . date("d-m-Y h:i:sa"). "<br><br>";

echo date("l",mktime(0,0,0,10, 15, 2003)). "<br><br>";

echo date("d-m-Y h:i:sa",mktime(0,0,0,10, 15, 2003)). "<br><br>";

/*------GMT Time Function------- */
echo date("d-m-Y h:i:sa",gmmktime(0,0,0,10, 15, 2003))
?>