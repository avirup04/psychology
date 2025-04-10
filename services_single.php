<?php
include 'config.php'; // Database connection

// Check if 'id' is present in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the corresponding post from the database
    $sql = "SELECT title, image_url, full_content FROM blog_posts WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<h2>Post not found!</h2>";
        exit;
    }
} else {
    echo "<h2>Invalid Request!</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['title']; ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Your CSS file -->
    <?php include 'link.php'; ?>
    <style>
        .big-card {
            max-width: 900px;
            margin: auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            background: #fff;
            padding: 20px;
        }
        .big-card .img-container {
            width: 100%;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f9f9f9;
        }
        .big-card img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; /* Ensures the full image is visible */
        }
        .big-card .card-body {
            padding: 20px;
        }
        .big-card h1 {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 15px; /* Adds 15px gap between title and full content */
        }
        .big-card p {
            font-size: 16px;
            line-height: 1.8;
            text-align: left;
        }
        .back-btn-container {
            text-align: center;
            margin-top: 15px; /* Adds 15px gap between content and the button */
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="card big-card">
            <div class="img-container">
                <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['title']; ?>">
            </div>
            <div class="card-body">
                <h1><?php echo $row['title']; ?></h1>
                <p><?php echo nl2br($row['full_content']); ?></p>
                <div class="back-btn-container">
                    <a href="services.php" class="btn btn-link">Back</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>

</body>
</html>
