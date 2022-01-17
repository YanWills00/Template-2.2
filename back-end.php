<?php
	
	// database connection
	$conn = mysqli_connect('localhost', 'Tester', '', 'delivery');


	
	if(isset($_GET['submit'])) {
		$x = htmlspecialchars($_GET['code']);

		// collect and check code format
		if (preg_match('/^[A-Z0-9]{12}$/', $x)) {
			$code = htmlspecialchars($x);

			echo '<script type="text/javascript">
					var package = document.getElementById("package");
					package.classList.toggle("d-block");
				  </script>'
				;

			// collect data from db
			$sql = "SELECT * FROM track WHERE Tracking_number='$code' ";

			// query result
			$result = mysqli_query($conn, $sql);

			$infos = mysqli_fetch_all($result, MYSQLI_ASSOC);

			unset($code);
			
		} else {
			echo '<script type="text/javascript">
					var wrong = document.getElementById("wrong");
					wrong.classList.toggle("d-block");
				  </script>'
			;
		}

		

	}













?>