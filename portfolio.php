<?php include('includes/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <img src="images/profile.jpg" alt="My Photo" class="profile-photo">
        </nav>
    </header>

    <section>
        <h2>My Projects</h2>
        <div class="projects">
            <?php
            // Fetch projects from the database
            $sql = "SELECT * FROM projects";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Loop through each project and display it
                while($row = $result->fetch_assoc()) {
                    echo "
                    <div class='project'>
                        <img src='" . $row["image_url"] . "' alt='" . $row["name"] . "' class='project-img'>
                        <h3>" . $row["name"] . "</h3>
                        <p>" . $row["description"] . "</p>
                        <a href='" . $row["url"] . "' target='_blank' class='project-link'>View Project</a>
                    </div>
                    ";
                }
            } else {
                echo "<p>No projects found.</p>";
            }
            ?>
        </div>
    </section>

    

    <script src="js/script.js"></script>
</body>
</html>
