<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
	</head>
<body>
	<div class="container">
		

		<div class="row">
		<h1>Car Sales AJAX List</h1>
		    <div>
				<form role="form" class="form-control"  method="post" action="">
		        	<div class="row">
		                <div class="form-group">
		                    <label for="car_make">Make</label>
		                    <select class="form-control" id="car_make" name="car_make">
		                    	<option selected="" disabled="">Select Make</option>
		                    	<?php 
		                    		require 'data.php';
		                    		$car_makes = loadCarMakes();
		                    		foreach ($car_makes as $car_make) {
		                    			echo "<option id='".$car_make['id']."' value='".$car_make['id']."'>".$car_make['name']."</option>";
		                    		}
		                    	 ?>
		                    </select>
		                </div>
		            </div>
		            <div class="row">
		                <div class="form-group">
		                    <label for="car_models">Models</label>
		                    <select class="form-control" id="car_models" name="car_models">
		                    	
		                    </select>
		                </div>
		            </div>
		        </form>
		    </div>
		</div>
	</div>
	<script src="action.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>