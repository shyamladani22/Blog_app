<?php
include ('includes/db.php');
include './includes/header.php';
?>
<?php
$slug = $_GET['slug'];
$result = $conn->query("SELECT * FROM articles WHERE slug='$slug'");
$article = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Application</title>
    <script src="assets/js/scripts.js"></script>
</head>

<body>
    <h2><?php echo $article['title']; ?></h2>
    <p><?php echo $article['description']; ?></p>
    <p>Category: <?php echo $article['category']; ?></p>
    <p>Created at: <?php echo $article['created_at']; ?></p>
</body>

</html>

<?php
include './includes/footer.php';
?>