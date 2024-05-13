<!DOCTYPE html>
<html>
<head>

<title>Client's problems</title>
<!-- Include Bootstrap CSS and JS links here -->
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
<h1>Problems</h1>
<table class="table table-striped">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Problem</th>
<th>Message</th>
</tr>
</thead>
<tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "technologies";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!mysqli_select_db($conn, $database)) {
    die("Database selection failed: " . mysqli_error($conn));
}
$sql = "SELECT * FROM problems ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>{$row['name']}</td>";
echo "<td>{$row['email']}</td>";
echo "<td>{$row['problem']}</td>";
echo "<td>{$row['messege']}</td>"; // Check the spelling of 'message'
}
} else {
echo "<tr><td colspan='4'>No Problems found</td></tr>";
}
$conn->close();
?>
</tbody>
</table>
</div>
</body>
</html>
