<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compliments and complains</title>

<body style="background-color: lightgrey;"></body>

   
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




</style>


<div class="main">
    <h1>Compliments and complains</h1>
    <img src="C\U:sers\ivymu\Desktop\Sweet Delicacies\download.jpeg" alt="Sweet Delicacies" width="800", height="500",border="3"/>
    <style>
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


<p>We work tirelessly to ensure we meet our customers needs. 
        All compliments and comments on the workers and services are highly appreciated.
        There is also room for improvent so feel free to write a complaint below so that we are able to serve you better.</p>

<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your name..">
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="email ">Email </label>
    </div>
    <div class="col-75">
      <input type="text" id="email " name="email " placeholder="Your email..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="compliment">Compliment </label>
    </div>
    <div class="col-75">
      <textarea id="compliment" name="compliment" placeholder="Write your compliment.." style="height:200px"></textarea>
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="complaint ">Complaint</label>
    </div>
    <div class="col-75">
      <textarea id="complaint" name="complaint" placeholder="Write your complaint.." style="height:200px"></textarea>
    </div>
  </div>
   <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>

    
    
       
   </div>  
</body>
</div>  
</html>


 
