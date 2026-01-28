<?php
require_once __DIR__ . "/../config/database.php";

// Fetch all posts
$sql = "SELECT id, title, content, created_at FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Blog</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<h1>My PHP Blog</h1>

<?php if ($result && $result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
        <article>
            <h2><?php echo htmlspecialchars($row['title']); ?></h2>
            <p>
                <?php echo nl2br(htmlspecialchars(substr($row['content'], 0, 200))); ?>...
            </p>
            <small>Published on <?php echo $row['created_at']; ?></small>
        </article>
        <hr>
    <?php endwhile; ?>
<?php else: ?>
    <p>No posts found.</p>
<?php endif; ?>

</body>
</html>
