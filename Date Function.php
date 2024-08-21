<?php

echo"<br>";

echo date('Y-m-d'); // Output: 2024-08-06 (for example, if the current date is August 6, 2024)
echo"<br>";
echo date('Y-m-d H:i:s'); // Output: 2024-08-06 14:23:55 (if the current time is 2:23:55 PM)
echo"<br>";

$timestamp = strtotime('2024-12-25 12:00:00');
echo date('Y-m-d H:i:s', $timestamp); // Output: 2024-12-25 12:00:00

echo"<br>";
echo date('l, F j, Y'); // Output: Monday, August 6, 2024

echo"<br>";
$timestamp = time();
echo $timestamp; // Outputs the current Unix timestamp

echo"<br>";
$timestamp = strtotime('2024-08-06 14:00:00');
echo $timestamp; // Outputs the Unix timestamp for the given date and time

echo"<br><br>";
echo date('Y-m-d'); // Output: 2024-08-06
echo date('H:i:s'); // Output: 14:00:00 (if the current time is 2 PM)
echo date('Y-m-d H:i:s'); // Output: 2024-08-06 14:00:00

echo"<br>";

echo date('l, F j, Y'); // Output: Tuesday, August 6, 2024
echo date('g:i A');     // Output: 2:00 PM

echo"<br>";
$date = '2024-08-06';
$timestamp = strtotime($date);
echo date('Y-m-d', $timestamp); // Output: 2024-08-06

echo"<br>";

$today = time();
$tomorrow = $today + (24 * 60 * 60); // Adding one day
echo date('Y-m-d', $tomorrow); // Output: 2024-08-07 (if today is 2024-08-06)
$yesterday = $today - (24 * 60 * 60); // Subtracting one day
echo date('Y-m-d', $yesterday); // Output: 2024-08-05 (if today is 2024-08-06)



echo"<br>";
$date = new DateTime('2024-08-06');
$date->add(new DateInterval('P1D')); // Add one day
echo $date->format('Y-m-d'); // Output: 2024-08-07
$date->sub(new DateInterval('P1M')); // Subtract one month
echo $date->format('Y-m-d'); // Output: 2024-07-07



echo"<br>";
date_default_timezone_set('America/New_York');
echo date('Y-m-d H:i:s'); // Output will be in the New York timezone


echo"<br>";
echo date_default_timezone_get(); // Output: America/New_York (or your current timezone)

echo"<br>";

$datetime = new DateTime('2024-08-06 14:00:00', new DateTimeZone('Europe/London'));
echo $datetime->format('Y-m-d H:i:s'); // Output: 2024-08-06 14:00:00
$datetime->setTimezone(new DateTimeZone('America/New_York'));
echo $datetime->format('Y-m-d H:i:s'); // Output will be converted to New York timezone


echo"<br>";
$date1 = strtotime('2024-08-06');
$date2 = strtotime('2024-08-07');
if ($date1 < $date2) {
    echo "Date1 is earlier than Date2";
} elseif ($date1 > $date2) {
    echo "Date1 is later than Date2";
} else {
    echo "Date1 is the same as Date2";
}



echo"<br>";
$date1 = new DateTime('2024-08-06 14:00:00');
$date2 = new DateTime('2024-08-07 16:30:00');
$interval = $date1->diff($date2);
echo $interval->format('%h hours, %i minutes'); // Output: 26 hours, 30 minutes

// echo"<br>";
// Creating an Array of Dates
// $dates = [
//     '2024-08-01',
//     '2024-08-05',
//     '2024-08-10',
// ];
// foreach ($dates as $date) {
//     echo date('l, F j, Y', strtotime($date)) . "\n";
// }
// Output:
// Thursday, August 1, 2024
// Monday, August 5, 2024
// Saturday, August 10, 2024

echo"<br>";

$timestamp = mktime(14, 30, 0, 8, 6, 2024); // August 6, 2024 at 14:30:00
echo $timestamp; // Outputs Unix timestamp for the specified date and time
echo date('Y-m-d H:i:s', $timestamp); // Outputs: 2024-08-06 14:30:00

echo"<br>";
$timestamp = gmmktime(14, 30, 0, 8, 6, 2024); // August 6, 2024 at 14:30:00 GMT
echo $timestamp; // Outputs Unix timestamp for the specified date and time in GMT
echo date('Y-m-d H:i:s', $timestamp); // Outputs: 2024-08-06 14:30:00 in local time

echo"<br>";
$format = 'd/m/Y';
$dateString = '06/08/2024';
$date = DateTime::createFromFormat($format, $dateString);
echo $date->format('Y-m-d'); // Output: 2024-08-06

echo"<br>";
$date = new DateTime('2024-08-06 14:30:00');
echo $date->format('Y-m-d H:i:s'); // Output: 2024-08-06 14:30:00
echo $date->format('l, F j, Y');  // Output: Tuesday, August 6, 2024
echo"<br>";


if (checkdate(2, 29, 2024)) { // February 29, 2024 (leap year)
    echo "The date is valid.";
} else {
    echo "The date is invalid.";
}

echo"<br>";
if (checkdate(2, 30, 2024)) { // February 30, 2024 (invalid date)
    echo "The date is valid.";
} else {
    echo "The date is invalid.";
}

echo"<br>";
$date1 = new DateTime('2024-08-06');
$date2 = new DateTime('2024-08-10');
$interval = $date1->diff($date2);
echo $interval->format('%d days'); // Output: 4 days


echo"<br>";
$date1 = new DateTime('2024-08-10');
$date2 = new DateTime('2024-08-06');
$interval = $date1->diff($date2, true); // Get absolute difference
echo $interval->format('%d days'); // Output: 4 days

echo"<br>";
$date1 = new DateTime('2023-01-01');
$date2 = new DateTime('2024-08-06');
$interval = $date1->diff($date2);
echo $interval->format('%y years, %m months, %d days'); // Output: 1 years, 7 months, 5 days

echo"<br>";
$date = new DateTime('2024-08-06');
$interval = new DateInterval('P1M'); // Add 1 month
$date->add($interval);
echo $date->format('Y-m-d'); // Output: 2024-09-06

echo"<br>";
$date = new DateTime('2024-08-06');
$interval = new DateInterval('P1W'); // Subtract 1 week
$date->sub($interval);
echo $date->format('Y-m-d'); // Output: 2024-07-30


echo"<br>";
$date = new DateTime('2024-08-06');
$date->modify('+1 month'); // Add 1 month
echo $date->format('Y-m-d'); // Output: 2024-09-06
$date->modify('-1 week'); // Subtract 1 week
echo $date->format('Y-m-d'); // Output: 2024-08-30

echo"<br>";
$date = new DateTime('2024-08-06');
$date->modify('+10 days');
echo $date->format('Y-m-d'); // Output: 2024-08-16


echo"<br>";
$date = new DateTime('2024-08-06');
$date->modify('-2 months');
echo $date->format('Y-m-d'); // Output: 2024-06-06


echo"<br>";
$date = new DateTime('2024-08-06');
$date->modify('2025-01-01');
echo $date->format('Y-m-d'); // Output: 2025-01-01

echo"<br>";
$dateArray = getdate();
print_r($dateArray);
/* Output might look like:
Array
(
    [seconds] => 45
    [minutes] => 30
    [hours] => 14
    [mday] => 6
    [wday] => 2
    [mon] => 8
    [year] => 2024
    [yday] => 218
    [weekday] => Tuesday
    [month] => August
)
*/

echo"<br>";
$timeArray = localtime();
print_r($timeArray);
/* Output might look like:
Array
(
    [0] => 45
    [1] => 30
    [2] => 14
    [3] => 6
    [4] => 7
    [5] => 124
    [6] => 2
    [7] => 218
    [8] => 0
)
*/

echo"<br>";

$timeArray = localtime(time(), true);
print_r($timeArray);
/* Output might look like:
Array
(
    [tm_sec] => 45
    [tm_min] => 30
    [tm_hour] => 14
    [tm_mday] => 6
    [tm_mon] => 7
    [tm_year] => 124
    [tm_wday] => 2
    [tm_yday] => 218
    [tm_isdst] => 0
)
*/


$timeArray = gettimeofday();
print_r($timeArray);
/* Output might look like:
Array
(
    [sec] => 1691334645
    [usec] => 123456
    [minuteswest] => -300
    [dsttime] => 0
)
*/


$timeFloat = gettimeofday(true);
echo $timeFloat; // Outputs a float with seconds and microseconds

?>