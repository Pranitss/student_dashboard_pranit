
<!DOCTYPE html>
<html>
<head>
    <title>Job Calls</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Job Listing</h2>
        <form method="post">
            <input type="text" name="title" placeholder="Job Title"><br>
            <textarea name="description" placeholder="Job Description"></textarea><br>
            <button type="submit" name="submit_job">Submit Job</button>
            <br>
            <br>
            <a href="index.php">BACK</a>
        </form>
    </div>
</body>
</html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asteriscstudents";

// Connect to the database
$mysqli = new mysqli($servername, $username, $password, $dbname, 3307);

// Add a new job listing
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_job'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Perform basic input validation here if needed

    $insertQuery = "INSERT INTO jobs (title, description, posted_at) VALUES ('$title', '$description', NOW())";
    
    if ($mysqli->query($insertQuery) === TRUE) {
        echo "Job listing added successfully.";
    } else {
        echo "Error adding job listing: " . $mysqli->error;
    }
}

?>

