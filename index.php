<!DOCKTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Marc Goering // Wunschliste</title>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<?php
		require "db.php";
		$sql = "SELECT * FROM wish";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->get_result();
		
		while($row = $result->fetch_assoc()) {
			echo '<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $row["id"] . '" aria-expanded="false" aria-controls="flush-collapseOne">
        ' . $row["name"] . '
      </button>
    </h2>
    <div id="' . $row["id"] . '" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><a href="' . $row["link"] . '" target="_blank">AMAZON</a>, ' . $row["price"] . '</div>
    </div>
  </div>
</div>';
		}
		$stmt->close();
		$conn->close();
		?>
		
		<h1 style="margin: 15px;">Priorität nach Reihenfolge!</h1>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>