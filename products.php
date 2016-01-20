<?php 
$output = '';
$productId = $_GET['product'];

if ($productId == 1) {
	$output  = 'Mac';
	} else if ($productId == 2) {
		$output = 'Ubuntu';
		} else if ($productId == 3) {
			$output = 'Windows';
	} else {
		$output = 'invalid';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/styles.css">
	<title>Products</title>
</head>
<body>

	<?php include 'header.php'; ?>

	<h1>Products</h1>

	<?php echo 'You selected ' . $output ?>

	<?php include 'footer.php'; ?>

</body>
</html>