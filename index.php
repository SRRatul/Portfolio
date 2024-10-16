<?php include('includes/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Salvir Rahman Ratul</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Hello I am Salvir!</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <img src="profile.jpg" alt="My Photo" class="profile-photo">
        </nav>
    </header>

    <section>
        <h2>My Projects</h2>
        <div class="projects">
            <?php
            $sql = "SELECT * FROM projects";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='project'>
                        <h3>" . $row["name"] . "</h3>
                        <p>" . $row["description"] . "</p>
                        <a href='" . $row["url"] . "'>View Project</a>
                    </div>";
                }
            } else {
                echo "No projects found";
            }
            ?>
        </div>
    </section>

    

    <script src="script.js"></script>
</body>
</html>
