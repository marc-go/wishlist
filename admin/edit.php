<?php
$name = $_POST["name"];
$link = $_POST["link"];
$price = $_POST["price"];
$id = intval($_POST["id"]);

require "../db.php";

$sql = "UPDATE wish SET name = ?, link = ?, price = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $name, $link, $price, $id);

if ($stmt->execute()) {
	header("Location: /admin/");
}else{
	header("Location: /admin/?error=true");
}
exit;
?>