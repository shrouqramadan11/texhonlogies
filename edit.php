<!DOCTYPE html>
<html>
<head>
<title>Edit device</title>
<!-- Include Bootstrap CSS and JS links here -->
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
<h1>Edit device</h1>
<form method="POST">
<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$code = $_POST['code'];
$sql = "UPDATE devices SET name='$name',
description='$description', price='$price' ,  code='$code' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header('Location: buying.php');
exit;
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
} elseif (isset($_GET['id'])) {
$id = $_GET['id'];
$sql = "SELECT * FROM devices WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
}
?>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control" id="name" name="name"
value="<?php echo $row['name']; ?>" required>
</div>
<div class="form-group">
<label for="description">Description:</label>
<textarea class="form-control" id="description"
name="description"><?php echo $row['description']; ?></textarea>
</div>
<div class="form-group">
<label for="price">Price:</label>
<input type="number" class="form-control" id="price" name="price"
step="0.01" value="<?php echo $row['price']; ?>" required>
</div>
<div class="form-group">
<label for="code">Code:</label>
<input type="number" class="form-control" id="price" name="code"
step="0.01" value="<?php echo $row['code']; ?>" required>
</div>
<button type="submit" class="btn btn-primary">Save Changes</button>
</form>
<p><a class="btn btn-secondary mt-3" href="buying.php">Back to devices
List</a></p>
</div>
</body>