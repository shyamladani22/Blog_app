<?php include ('includes/db.php'); ?>
<?php
$sort_date = $_GET['sort_date'];
$result = $conn->query("SELECT * FROM articles ORDER BY created_at $sort_date");
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

    <ul id="article_list">
        <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <a href="view.php?slug=<?php echo $row['slug']; ?>"><?php echo $row['title']; ?></a>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </li>
        <?php endwhile; ?>
    </ul>

</body>

</html>