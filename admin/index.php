<!DOCKTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Wl - Admin</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<?php
		if (isset($_GET["error"])) {
			echo '<div class="alert alert-danger" role="alert">
  					SQL Error.
				  </div>';
		}
		?>
		<div class="container py-5">
  			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
				<?php
				ini_set("display_errors", 1);
				error_reporting(E_ALL);
				
				require "../db.php";
				
				$sql = "SELECT * FROM wish";
				$stmt = $conn->prepare($sql);
				$stmt->execute();
				$result = $stmt->get_result();
				
				while ($row = $result->fetch_assoc()) {
					echo '
    				<div class="col">
      					<div class="card link-card h-100">
        					<div class="card-body">
								<form action="edit.php" method="post">
									<input type="hidden" name="id" value="' . $row["id"] . '">
          							<input type="text" name="name" class="form-control" id="floatingInput" value="' . $row["name"] . '"><br>
									<input type="text" name="link" class="form-control" id="floatingInput" value="' . $row["link"] . '"><br>
									<input type="text" name="price" class="form-control" id="floatingInput" value="' . $row["price"] . '"><br>
									<button type="submit" class="btn btn-primary">Speichern</button><br><br>
									<a href="delete.php?id=' . $row["id"] . '" class="btn btn-danger">Löschen</a>
								</form>
        					</div>
      					</div>
					</div>';
				}
				$stmt->close();
				$conn->close();
				?>
				<div class="col">
      				<div class="card link-card h-100">
        				<div class="card-body">
							<h5 class="card-title">Neuer Wunsch</h5>
							<form action="/add.php" method="post">
								<input type="hidden" name="id" value="' . $row["id"] . '">
          						<input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name"><br>
								<input type="text" name="link" class="form-control" id="floatingInput" placeholder="URL"><br>
								<input type="text" name="price" class="form-control" id="floatingInput" placeholder="Preis"><br>
								<button type="submit" class="btn btn-primary">Hinzufügen</button><br><br>
							</form>
        				</div>
      				</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>