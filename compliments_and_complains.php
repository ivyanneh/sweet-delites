<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compliments and Complaints</title>
    <style>
        body {
            background-color: lightgrey;
        }

        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 6px 6px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 200px;
            padding: 20px;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: gray;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: lightgrey;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
    <div class="sidenav">
        <a href="index.php">Homepage</a>
        <a href="price_list.php">Price List</a>
        <a href="order.php">Order</a>
        <a href="menu.php">Menu</a>
        <a href="about_us.php">About Us</a>
        <a href="gallery.php">Gallery</a>
        <a href="compliments_and_complains.php">Compliments and Complaints</a>
        <a href="contact_us.php">Contact Us</a>
    </div>

    <div class="main">
        <h1>Compliments and Complaints</h1>
        <p>We work tirelessly to ensure we meet our customers' needs. 
        All compliments and comments on the workers and services are highly appreciated.
        There is also room for improvement so feel free to write a complaint below so that we can serve you better.</p>

        <div class="container">
            <form action="compliments_and_complains.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Your name.." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="email" name="email" placeholder="Your email.." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="compliment">Compliment</label>
                    </div>
                    <div class="col-75">
                        <textarea id="compliment" name="compliment" placeholder="Write your compliment.." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="complaint">Complaint</label>
                    </div>
                    <div class="col-75">
                        <textarea id="complaint" name="complaint" placeholder="Write your complaint.." style="height:200px"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
include 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $compliment = $_POST['compliment'];
    $complaint = $_POST['complaint'];

    // Debugging: Print submitted form data
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO compliments_and_complaints (firstname, lastname, email, compliment, complaint) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if prepare() failed
    if ($stmt === false) {
        die("Error in preparing statement: " . htmlspecialchars($conn->error));
    }

    // Bind parameters and execute
    $stmt->bind_param("sssss", $firstname, $lastname, $email, $compliment, $complaint);

    if ($stmt->execute()) {
        echo "Submitted successfully!";
    } else {
        echo "Error: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>