<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style>
        body {
            background-color: gray;
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

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }

        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #b89c9c;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: grey;
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
            background-color: lightgray;
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
        <h1>Order</h1>
        <p>Kindly place your order</p>

        <div class="container">
            <form action="order.php" method="POST">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Full Names</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="fullname" placeholder="Your name.." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="caketypes">Cake Type</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="caketypes" name="cake_type" placeholder="Input cake you chose.." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="quantity">Quantity</label>
                    </div>
                    <div class="col-75">
                        <select id="quantity" name="quantity" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="orderdate">Order Date</label>
                    </div>
                    <div class="col-75">
                        <input type="date" id="orderdate" name="orderdate" placeholder="Date of order.." required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="additional_details">Additional Details</label>
                    </div>
                    <div class="col-75">
                        <textarea id="additional_details" name="additional_details" placeholder="Write something.." style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="totalprice">Total Price</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="totalprice" name="totalprice" placeholder="Total price.." required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <button id="orderButton" type="submit" name="submit">Order</button>
                </div>
            </form>
        </div>

        <script>
            const orderButton = document.getElementById("orderButton");
            orderButton.addEventListener("click", function() {
                alert("Order submitted!");
            });
        </script>
    </div>
</body>
</html>

<?php
include 'dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $full_name = $_POST['fullname'];
    $cake_type = $_POST['cake_type'];
    $quantity = $_POST['quantity'];
    $order_date = $_POST['orderdate'];
    $additional_details = $_POST['additional_details'];
    $total_price = $_POST['totalprice'];

    $stmt = $conn->prepare("INSERT INTO orders (full_name, cake_type, quantity, order_date, additional_details, total_price) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissi", $full_name, $cake_type, $quantity, $order_date, $additional_details, $total_price);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Order submitted successfully!";
    } else {
        echo "Failed to submit order.";
    }

    $stmt->close();
    $conn->close();
}
?>