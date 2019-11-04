<?php 

// Declare and define two dates 
$date1 = strtotime("2019-10-29 11:53:00"); 
$date2 = strtotime("2019-12-20 09:00:01"); 

$diff = abs($date2 - $date1); 
$years = floor($diff / (365*60*60*24)); 
$months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24)); 
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); 

$hours = floor(($diff - $years * 365*60*60*24 
	- $months*30*60*60*24 - $days*60*60*24) 
								/ (60*60)); 


$minutes = floor(($diff - $years * 365*60*60*24 
		- $months*30*60*60*24 - $days*60*60*24 
						- $hours*60*60)/ 60); 


$seconds = floor(($diff - $years * 365*60*60*24 
		- $months*30*60*60*24 - $days*60*60*24 
				- $hours*60*60 - $minutes*60)); 

printf("%d years, %d months, %d days, %d hours, "
	. "%d minutes, %d seconds", $years, $months, 
			$days, $hours, $minutes, $seconds); 
?> 
