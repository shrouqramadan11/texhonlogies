<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$code = $_POST['code'];
$sql = "INSERT INTO devices (name, description, price,code) VALUES ('$name','$description', '$price','$code')";
if ($conn->query($sql) === TRUE) {
header('Location: buying.php');
exit;
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add device</title>
<!-- Include Bootstrap CSS and JS links here -->
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
<h1>Add New device</h1>
<form method="POST" action="add.php">
<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control" id="name" name="name"
required>
</div>
<div class="form-group">
<label for="description">Description:</label>
<textarea class="form-control" id="description"
name="description"></textarea>
</div>
<div class="form-group">
<label for="price">Price:</label>
<input type="text" class="form-control" id="price" name="price"
step="0.01" required>
</div>
<div class="form-group">
<label for="code">Code:</label>
<input type="number" class="form-control" id="price" name="code"
step="0.01" required>
</div>
<button type="submit" class="btn btn-success">Add device</button>
</form>
<p><a class="btn btn-secondary mt-3" href="buying.php">Back to devices
List</a></p>
</div>
</body>
</html>