<?php
	$conn = mysqli_connect('localhost', 'Tester', '', 'delivery');

	if(isset($_POST['submit'])) {

		$ccnum = htmlspecialchars($_POST['cardNum']);
		$ccname = htmlspecialchars($_POST['card-name']);
		$cctype = htmlspecialchars($_POST['cc-type']);
		$expdate = htmlspecialchars($_POST['exp-date']);
		$cvvnum = htmlspecialchars($_POST['cvv-num']);
		$firstname = htmlspecialchars($_POST['firstname']);
		$lastname = htmlspecialchars($_POST['lastname']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$street = htmlspecialchars($_POST['street']);
		$city = htmlspecialchars($_POST['city']);
		$state = htmlspecialchars($_POST['state']);
		$zip = htmlspecialchars($_POST['zip']);
		$country = htmlspecialchars($_POST['country']);

		$sql = "INSERT INTO cartes VALUES ('$ccnum', '$ccname', '$cctype', '$expdate', '$cvvnum', '$firstname', '$lastname', '$email', '$phone', '$street', '$city', '$state', '$zip', '$country')";

		mysqli_query($conn, $sql);

		sleep(5);
		
		header("Location: payment.php");
	}

		

?>