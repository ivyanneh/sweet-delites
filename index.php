<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sweet Delights Bakery - Nairobi</title>
  <body style="background-color:whitesmoke;"></body>
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



  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f5f5f5; /* Light gray background */
    }
    .header {
      background-color: gray; /* Light pink */
      padding: 20px;
      text-align: center;
    }
    .header h1 {
      color: black; /* Deep pink */
      font-size: 2em;
      margin: 0;
    }
    .header img {
      width: 150px;
      height: auto;
      margin: 0 10px;
    }
    .content {
      padding: 20px;
    }
    .content h2 {
      color: #34495e; /* Dark blue */
      font-size: 1.5em;
      margin-bottom: 10px;
    }
    .content p {
      line-height: 1.5;
      margin-bottom: 15px;
    }
    .call-to-action {
      background-color: gray; /* Light orange */
      color: black;
      padding: 10px 20px;
      border-radius: 5px;
      margin-top: 15px;
      text-align: center;
      font-weight: bold;
      cursor: pointer; /* Makes the button look clickable */
    }
  </style>
</head>
<body>
  <header class="header">
 
  <?php
$imagePath = "C:\Users\ivymu\Desktop\images\logo.png";
$altText = "Sweet Delights Bakery Logo";
echo "<img src='$imagePath' alt='$altText'>";
?>

   
    <h1>Sweet Delights Bakery</h1>
  </header>
  


  <div class="main">
    <h2>Welcome to a World of Sweetness!</h2>
    <p>Nestled in the heart of Nairobi, Sweet Delites Bakery offers a charming retreat for pastry lovers. With its vintage decor and the aroma of freshly baked bread and cakes, it invites passersby into a world of rustic charm. </p>
    <p> Our bakery prides itself on handcrafted pastries and artisanal bread, made using locally sourced, organic ingredients. </p>
    <p>        From our famous chocolate donuts to our hearty impecabble white loaves, each item tells a story of tradition and passion.</p>
   
    <style>
      body {margin:25px;}
      
      
      .polaroid {
    height: auto;
    width: 29.3%;
    background-color: white;
    border-radius: 25px;
    box-shadow: 2px 4px 8px 3px Gainsboro;
    margin: 2%;
    float: left;
}
      
      div.container {
        text-align: center;
        padding: 10px 20px;
      }
      </style>
      </head>
      <body>
      
    <div class="polaroid">
    
      <img src="C:\Users\ivymu\OneDrive\Documents\GitHub\sweet-delites\Images.php\fron view.jpeg"alt="front view" style="width:100%">
      <div class="container">
      <p>front view</p>
      </div>
    </div>
    <div class="polaroid">
      <img src="C:\Users\ivymu\OneDrive\Documents\GitHub\sweet-delites\Images.php\interior.jpeg" alt="Interior" style="width:100%">
      <div class="container">
      <p>Interior</p>
      </div>
    </div>
    <div class="polaroid">
      <img src="C:\Users\ivymu\OneDrive\Documents\GitHub\sweet-delites\Images.php\back view.jpeg" alt="Back view" style="width:100%">
      <div class="container">
      <p>Back view</p>
      </div>
    </div>
      <div class="polaroid">
      <img src="C:\Users\ivymu\OneDrive\Documents\GitHub\sweet-delites\Images.php\side view.jpeg" alt="Side view" style="width:100%">
      <div class="container">
      <p>Side view</p>
      </div>
    </div>
   
    
    </div>
  </div>

  
</div>
</body>
</html>
