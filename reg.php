<?php
	$titleSelect = $_GET['titleSelect'];
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
	$email = $_GET['email'];
    $genderSelect = $_GET['genderSelect'];
	$residenceSelect = $_GET['residenceSelect'];
	$zipCode = $_GET['zipCode'];


	$data = $titleSelect . ", " . $firstName . ", " . $lastName . " , " . $email  . " , " . $genderSelect . " , " . $residenceSelect . " , " . $zipCode . "\r\n";
	$saveMsgs = file_put_contents('reg.txt', $data, FILE_APPEND | LOCK_EX);
	echo "<script type= 'text/javascript'>alert('Registration Success!')</script>";
	echo "<script type='text/javascript'>document.location.href = 'index.html'</script>";

	
?>