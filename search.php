<?php include ('includes/db.php'); ?>
<?php
$query = $_GET['query'];
$result = $conn->query("SELECT * FROM articles WHERE title LIKE '%$query%' OR description LIKE '%$query%' OR category LIKE '%$query%' ORDER BY created_at DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Application</title>
</head>

<body>
    <h2>Search Results</h2>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <a href="view.php?slug=<?php echo $row['slug']; ?>"><?php echo $row['title']; ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
</body>

</html>