<?php
$_SESSION['username'] = "Admin";

?>

<?php
if (isset($_SESSION['username'])) {
	echo "





	";
}
?>
 <!DOCTYPE html>
<html lang="en">

<head>
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
	
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
	
<body>

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
	<form class="p-5 rounded shadow" action="upload.php" method="post" enctype="multipart/form-data" style="width: 30rem">
		<h1 class="text-center">Image Upload</h1>
		<h2 class="text-center">Center</h2>
	<div class="mb-3">
		<label for="filename">File Name</label>
		<input type="text" name="filename" placeholder="file name" class="form-control">
    </div>
	<div class="mb-3">
		<label for="filetitle">Image Title</label>
		<input type="text" name="filetitle" placeholder="image title" class="form-control">
	</div>
	<div class="mb-3">
		<label for="filedesc">File Description</label>
		<input type="text" name="filedesc" placeholder="file discription" class="form-control">
	</div>
	<div class="mb-3">
		<input type="file" name="file" class="form-control">
	</div>
	<div>
		<small id="emailHelp" class="form-text text-muted">
		<p>Back to Home Page <a href="test.php">Click here</a></p>
		</small>
	</div>	
	<div class="mb-3">
		<button type="submit" name="submit" class="btn btn-primary">Upload Image</button>
	</div>
	</form>
	</div>
	</body>
	</html>