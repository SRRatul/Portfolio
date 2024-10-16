<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
    <style>
      
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
            transition: background-color 0.3s ease;
        }

        th {
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
        @media (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            th, td {
                padding: 10px;
                font-size: 14px;
            }
        }
        tr {
            transition: background-color 0.3s, transform 0.2s ease-in-out;
        }

        tr:hover {
            transform: scale(1.02); 
        }
        td:first-child {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <h1>About Me</h1>
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
        <p>Hello! my name is Salvir Rahman Ratul. I am a web developer. I live in Dhaka. I work with html, css, Java Script.</p>
    </section>
    <div class="table">
    <table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Degree</th>
            <th>Institution</th>
            <th>Years Attended</th>
            <th>GPA / CGPA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Bachelor of Science in Computer Science</td>
            <td>University of Liberal Arts Bangladesh</td>
            <td>2022 - 2026</td>
            <td>3.8</td>
        </tr>
        <tr>
            <td>Higher Secondary Certificate (HSC)</td>
            <td>Engineering University school and College</td>
            <td>2019 - 2021</td>
            <td>5.0</td>
        </tr>
        <tr>
            <td>Secondary School Certificate (SSC)</td>
            <td>Government Laboratory High School</td>
            <td>2014 - 2019</td>
            <td>5.0</td>
        </tr>
    </tbody>
</table>

    </div>
   
</body>
</html>
