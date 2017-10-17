<!DOCTYPE html>
<html lang="en">


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<title>Current Technical Mockup</title>

<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    



 </head>


<!-- Navbar -->
<div class= "container">
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
  <a href="#"> <i class = "fa fa-envelope-o" aria-hidden="true">Messages</i> </a>
  <a href="signup.html"> <i class = "fa fa-drivers-license-o">Account</i></a>
  <a href="index.html"> <i class = "fa fa-fire"> Incline </i> </a>
  <a href="#"> <i class = "fa fa-gears">Settings</i></a>  
</div>
</nav>
</div>

<div class="container">
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form id="custom-search-form" class="form-search form-horizontal pull-right">
                <div class="input-append span12">
                    <input type="text" class="search-query" placeholder="Search">
                   <a href="#" class="btn">
      <i class="fa fa-search" aria-hidden="true"></i> 
    </a>
                </div>
            </form>
        </div>
	</div>
</div>
 


<body id="page-top">
</br>
<center><h1>Do Something Interesting </h1><center>
  <!-- Middle of Page - TODO: PUT CONTENT HERE -->
</br>
</br>
<center><h4 class= "diagonal">Coming soon: Trending Feed Behavior</h4></center>

<?php
  include 'connection.php';
  
  $sqlget = "SELECT * FROM text_content";
  $sqldata = mysqli_query($conn, $sqlget) or die('error');

 
  while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
      echo "<div class = "well" >";
      echo "</br>";
      echo $row['posts'];
      echo "</br>";
  }
?>


<div class= "well">
  <div id = "formContainer">
    <form id= "post_text" action="send_posts.php" method= "POST">
<div class= "col-lg-4 col-lg-offset-4">
 <div class="form-group">
  <label for="content-box">Go on...</label>
<button class="btn" onclick="validateTextBox()" input type="submit"> <i class="fa fa-send-o"></i> </button>
  <textarea class="form-control" name="content" rows="5" id="text"></textarea>

 <div class="form-group">
  <label for="content-box">Go on...</label>
<button class="btn" onclick="validateTextBox()" input type="submit"> <i class="fa fa-send-o"></i> </button>
  <textarea type="text" class="form-control" name="content" rows="5" id="comment"></textarea>

</div>
</div> 
</div>
</div>

<center><h4>Things to be added</h4></center>
</br>
 <table>
  <table>
  <tr>
    <th>User Features</th>
    <th>Backend Features </th>
    <th> Stylistic Features</th>
  </tr>
  <tr>
    <td>1.Content Posting</td>
    <td>1.Content to DB</td>
    <td>1.Trending icons </td>
  </tr>
  <tr>
    <td>2.User Messaging</td>
    <td>2.Time-Refreshed Feed </td>
    
  </tr>
  <tr>
    <td>3.Content Saving</td>
  </tr>
</table>


<!-- END of page middle -->

  <!-- Bottom of PAGE -->

   <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>



<script>
function validateTextBox(){
var text = document.getElementById("comment").value;

if (text.length < 1)
	alert("Please fill out post form and resubmit.");
	return false;
}
</script>
</body>
    </html>
