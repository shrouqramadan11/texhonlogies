<!DOCTYPE html>
<html>
<head>
<title>Delete Product</title>
<!-- Include Bootstrap CSS and JS links here -->
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
<h1>Delete device</h1>
<?php
include 'config.php';
if (isset($_GET['id'])) {
$id = $_GET['id'];
$sql = "SELECT * FROM devices WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id = $_POST['id'];
$sql = "DELETE FROM devices WHERE id=$id";
if ($conn->query($sql) === TRUE) {
header('Location: buying.php');
exit;
} else {
echo "Error deleting record: " . $conn->error;
}
}
?>
<p>Are you sure you want to delete the product: <strong><?php echo
$row['name']; ?></strong>?</p>
<form method="POST">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<button type="submit" class="btn btn-danger">Yes, Delete</button>
<a class="btn btn-secondary" href="buying.php">Cancel</a>
</form>
</div>
</body>
</html>