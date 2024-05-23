<?php include ('includes/db.php'); ?>
<?php
$id = $_GET['id'];

$sql = "DELETE FROM articles WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Article deleted successfully")</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: index.php');
?>