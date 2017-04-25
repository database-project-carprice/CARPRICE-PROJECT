<?php
function datetime_ago($datetime_string) {
	date_default_timezone_set('Asia/Bangkok');
	$ts = strtotime($datetime_string);
	$now = strtotime('now');
	if(!$ts || $ts > $now) {
		return false;
	}

	$diff = $now - $ts;
	
	$second = 1;
	$minute = 60 * $second;
	$hour = 60 * $minute;
	$day = 24 * $hour;
	$yesterday = 48 * $hour;
    $month = 30 * $day;
	$year = 365 * $day;
	$ago = "";

	if($diff >= $year) {
		$ago = round($diff/$year) . " years ago";
	}	
	else if($diff >= $month) {
		$ago = round($diff/$month) . " mounts ago";
	}	
	else if($diff > $yesterday) {
		$ago = intval($diff/$day) . " days ago";
	}
	else if($diff <= $yesterday && $diff > $day) {
		$ago =  "yesterday";
	}
	else if($diff >= $hour) {
		$ago = intval($diff/$hour) . " hrs ago";
	}
	else if($diff >= $minute) {
		$ago = intval($diff/$minute) . " mins ago";
	}	
	else if($diff >= 5*$second) {
		$ago = intval($diff/$second) . " sec ago";
	}
	else {
		$ago = "now";
	}
	return " ".$ago;
}
?>