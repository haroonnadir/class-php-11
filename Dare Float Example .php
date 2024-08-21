<?php
$date_string = "2024-08-06 14:30:00";
$parsed_date = date_parse($date_string);
print_r($parsed_date);



$date_string = "2024-08-06 14:30:00";
$timestamp = strtotime($date_string);
echo "Timestamp: " . $timestamp . "\n";
echo "Formatted Date: " . date("Y-m-d H:i:s", $timestamp) . "\n";


$timestamp = strtotime("2024-08-06 14:30:00");
$formatted_date = strftime("%Y-%m-%d %H:%M:%S", $timestamp);
echo "Formatted Date: " . $formatted_date . "\n";


$timestamp = strtotime("2024-08-06 14:30:00");
$formatted_date_utc = gmstrftime("%Y-%m-%d %H:%M:%S", $timestamp);
echo "UTC Formatted Date: " . $formatted_date_utc . "\n";


// Create a new DateTime object
$datetime = new DateTime('2024-08-06 12:30:00');
// Set the time to 15:45:30
$datetime->setTime(15, 45, 30);
echo $datetime->format('Y-m-d H:i:s'); // Outputs: 2024-08-06 15:45:30


date_default_timezone_set('America/New_York');
echo date('Y-m-d H:i:s'); // Outputs the current date and time in New York timezone


echo date_default_timezone_get(); // Outputs the current default time zone


$timezone = new DateTimeZone('Europe/London');
echo $timezone->getName(); // Outputs: Europe/London


$timezone = new DateTimeZone('Asia/Tokyo');
$datetime = new DateTime('now', $timezone);
echo $datetime->format('Y-m-d H:i:s'); // Outputs the current date and time in Tokyo timezone


$datetime = new DateTime('2024-08-06 12:00:00', new DateTimeZone('America/New_York'));
$datetime->setTimezone(new DateTimeZone('Europe/London'));
echo $datetime->format('Y-m-d H:i:s'); // Outputs: 2024-08-06 17:00:00 (in London timezone)


$zones = DateTimeZone::listIdentifiers();
print_r($zones);


$timezone = new DateTimeZone('America/New_York');
$datetime = new DateTime('2024-08-06 12:00:00', $timezone);
echo $timezone->getOffset($datetime); // Outputs the offset in seconds from UTC

echo timezone_name_from_abbr('EST'); // Outputs: America/New_York


echo date_default_timezone_get(); // Outputs the current default time zone


$timezone = timezone_open('Europe/London');
echo $timezone->getName(); // Outputs: Europe/London


$timezone = new DateTimeZone('Asia/Tokyo');
echo timezone_name_get($timezone); // Outputs: Asia/Tokyo


$timezone = new DateTimeZone('America/New_York');
$location = timezone_location_get($timezone);
print_r($location);


$zones = timezone_identifiers_list(DateTimeZone::EUROPE);
print_r($zones);


?>
