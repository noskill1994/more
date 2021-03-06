<?php

	session_start();
	require_once("Database.php");

	try {
		$first_name = filter_input(INPUT_POST, 'user-first-name', FILTER_SANITIZE_STRING);
		$last_name = filter_input(INPUT_POST, 'user-last-name', FILTER_SANITIZE_STRING);
		$birth = filter_input(INPUT_POST, 'user-birth-date', FILTER_SANITIZE_STRING);
		$country = filter_input(INPUT_POST, 'user-country', FILTER_SANITIZE_STRING);
		$state = filter_input(INPUT_POST, 'user-state', FILTER_SANITIZE_STRING);
		$city = filter_input(INPUT_POST, 'user-city', FILTER_SANITIZE_STRING);
		$postal = filter_input(INPUT_POST, 'user-postal-code', FILTER_SANITIZE_STRING);
		$street = filter_input(INPUT_POST, 'user-street', FILTER_SANITIZE_STRING);
		$apartment = filter_input(INPUT_POST, 'user-apartment-number', FILTER_SANITIZE_STRING);
		UpdateUserAddress($first_name, $last_name, $birth, $country, $state, $city, $postal, $street, $apartment, $_SESSION['id']);
		$_SESSION['address-info'] = "<div class='success'>Address data updated!</div><br /><br />";
	} catch(Exception $e) {
		SaveLogToFile($e->getMessage());
		$_SESSION['address-info'] = "<div class='error'>Address data not updated!</div><br /><br />";
	}

	echo '<script type="text/javascript">'
		, 'window.location.replace("'.$_SERVER['HTTP_REFERER'].'");'
		, '</script/>';

?>