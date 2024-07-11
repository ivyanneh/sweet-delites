<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    
    <body style="background-color:gray;"></body>
    <div>
        <style>
           
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
              margin-left: 200px; /* Same as the width of the sidenav */
            }
            
            @media screen and (max-height: 450px) {
              .sidenav {padding-top: 15px;}
              .sidenav a {font-size: 18px;}
            }
            </style>
            </head>
            <body>
              <div class="sidenav">
                <a href="index.php"> homepage</a></th>
                <a href="price_list.php"> price List</a></th>
                <a href="order.php"> order</a></th>
                <a href="menu.php"> menu</a></th>
                <a href="about_us.php">about us</a></th>
                <a href="gallery.php"> gallery</a></th>
                <a href="compliments_and_complains.php"> Compliments and complains</a></th>
                <a href="contact_us.php"> Contact us</a></th>
               </div>
    
    
    
    <div class="main">
        <h1>Order</h1>
        <style>
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
            
            input[type=order] {
              background-color: grey;
              color: white;
              padding: 12px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              float: right;
            }
            
            input[type=order]:hover {
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
            
            /* Clear floats after the columns */
            .row::after {
              content: "";
              display: table;
              clear: both;
            }
            
            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
              .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
              }
            }
            </style>
            </head>
            <body>
            
           
            <p> Kindly place your order</p>
            
            <div class="container">
              <form action="/action_page.php">
              <div class="row">
                <div class="col-25">
                  <label for="fname">Full Names</label>
                </div>
                <div class="col-75">
                  <input type="text" id="fname" name="fullname" placeholder="Your name..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="caketypes">Cake Type</label>
                </div>
                <div class="col-75">
                  <input type="text" id="lname" name="Cake type" placeholder="Input cake you chose..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="quantity">Quantity</label>
                </div>
                <div class="col-75">
                  <select id="cquantity" name="quantity">
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
                  <label for="orderdate">Order date</label>
                </div>
                <div class="col-75">
                  <input type="date" id="orderdate" name="orderdate" placeholder="Date of order..">
                </div>
              </div>
                <div class="row">
                <div class="col-25">
                  <label for="additional details">Additional details </label>
                </div>
                <div class="col-75">
                  <textarea id="additional details " name="additional details " placeholder="Write something.." style="height:200px"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="totalprice">Total price</label>
                </div>
                <div class="col-75">
                  <input type="varchar" id="totalprice" name="totalprice" placeholder="total price.." style="height:40px"></textarea>
                </div>
              </div>
               <br>
               <div class="row">
    <button id="orderButton" type="button">Order</button>
</div>

<script>
    const orderButton = document.getElementById("orderButton");
    orderButton.addEventListener("click", function() {
               alert("Order submitted!");
    });
</script>
              <br>
              <?php
include '.vscode/dbconnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == "create") {
    $Full_name = $_POST[' Full_name '];
    $Cake_type = $_POST[' Cake_type '];
    $Quantity = $_POST[' Quantity '];
    $Order_date = $_POST[' Order_date'];
    $Additional_details = $_POST[' Additional_details '];
    $Total_price = $_POST[' Total_price '];

    $stmt = $conn->prepare("INSERT INTO orders(Full_name, Cake_type, Quantity, Order_date, Additional_details, Total_price)
    VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissi", $Full_name, $Cake_type, $Quantity, $Order_date, $Additional_details, $Total_price);
    $stmt->execute();
    echo "Order submitted!";
    $stmt->close();

    $conn->close();
}
?>






              </form>
            </div>
            
            </body>
            </html>
            
            
            
            
    </div>
</body>
</div>  
</head>

