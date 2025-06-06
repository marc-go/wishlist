<?php
$id = intval($_GET["id"]);

require "../db.php";

$sql = "DELETE FROM wish WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
	header("Location: /admin/");
}else{
    header("Location: /admin/?error=true");
}
exit;
?>