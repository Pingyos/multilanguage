<?php
require_once 'connection.php';
$query_menu_th = "SELECT title, home, contact FROM menu_th";
$query_details = "SELECT `description` FROM details";
try {
	$result_menu_th = $conn->query($query_menu_th);
	$menu_th = $result_menu_th->fetch(PDO::FETCH_ASSOC);
	$result_details = $conn->query($query_details);
	$details = $result_details->fetch(PDO::FETCH_ASSOC);
	$lang = array(
		"title" => $menu_th["title"],
		"home" => $menu_th["home"],
		"contact" => $menu_th["contact"],
		"description" => $details["description"],
		"lang_en" => "อังกฤษ",
		"lang_th" => "ไทย"
	);
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage();
}
$conn = null;