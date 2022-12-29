<?php 
	require 'DbConnect.php';

	if(isset($_POST['aid'])) {
		//'aid' == author ID
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM car_models WHERE make_id = " . $_POST['aid']);
		$stmt->execute();
		$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($books);
	}

	function loadCarMakes() {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM car_makes");
		$stmt->execute();
		$car_makes = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $car_makes;
	}

 ?>