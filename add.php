<?php
$name = $_POST["name"];
$link = $_POST["link"];
$price = $_POST["price"];

require "db.php";

$sql = "INSERT INTO wish (name, link, price) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $link, $price);
if ($stmt->execute()) {
	header("Location: /admin/");
}else{
	header("Location: /admin/?error=true");
}
exit;
?>