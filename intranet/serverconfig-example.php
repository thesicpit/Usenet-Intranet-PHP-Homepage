<?php 
	$config = array(

		# Services
		# Set these to false to disable them
		"sickbeard" => true,
		"couchpotato" => true,
		"headphones" => true,
		"sabnzbd" => true,
		"uTorrent" => true,
		"transmission" => false,

		# URLs and Ports
		"sickbeardURL" => "192.168.1.1",
		"sickbeardPort" => "8081",
		"sickbeardAPI" => "",
		"sabnzbdURL" => "192.168.1.1",
		"sabnzbdPort" => "8080",
		"sabnzbdAPI" => "",
		"couchpotatoURL" => "192.168.1.1",
		"couchpotatoPort" => "5000",
		"headphonesURL" => "192.168.1.1",
		"headphonesPort" => "8181",
		"uTorrentURL" => "192.168.1.1",
		"uTorrentPort" => "8089",
		"transmissionURL" => "192.168.1.1",
		"transmissionPort" => "9091",

		# Usernames and Passwords
		# If not using usernames or passwords, leave these to false.
		# ie. "sickbeardUsername" => false,
		"sickbeardUsername" => false,
		"sickbeardPassword" => false,
		"sabnzbdUsername" => "admin",
		"sabnzbdPassword" => "admin",
		"uTorrentUsername" => "admin",
		"uTorrentPassword" => "admin",
		"transmissionUsername" => false,
		"transmissionPassword" => false,

		# Sickbeard - Missed or Coming?
		# Australia, for example, is almost an entire day ahead of America and so American TV shows 
		# air the day after they say they're going to air, so instead of "coming shows", we use "missed shows"
		# to indicate what's coming out today. 
		# Set to true for "missed", false for "coming"
		"sickMissed" => true,

		# Show popups when hovering over coming shows?
		"sickPopups" => true,

		# Show trailers button
		"showTrailers" => true,

		# Wifi
		# WifiName is also used for page title
		"showWifi" => true,
		"wifiName" => "Home Network",
		"wifiPassword" => "abcd1234"

	);
?>