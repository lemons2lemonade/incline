<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>OTHERRRRRRR</title>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

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

  <body onload="switchButton()" class="bg">
 <!-- <?php include 'SignUpForm.php';?>-->
    <!--Header-->
      <!-- Navigation -->

    <!--Page 1-->
    <div id="page1">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger"  style = "color:black;" href="index.html">Incline</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="index.html#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="index.html#services">Key Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="mockup.html">Mockup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="authentication.jsp">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="signup.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End of header-->
  <br/>
  <br/>
    <div class="well" id="well" style="background-color: #f48942">
    <div class="container">
        <div>
          <button style="float: left; transition: all 3s ease 0s" onclick="switchUpToIn()" id="signInSwitchButton">Sign In</button>
        </div>
        <!-- <form class="form-signin" method="post" action="http://localhost:8080/incline1/profileSessionUpdate.jsp"> -->
      
      <form class="form-signin" action="SignUpForm.php" method="post" >

        <h2 class="form-signin-heading" style="text-align: center">Sign Up</h2>
          <label class="sr-only">Profile Image</label>
          <p><a>Profile Image: </a>
          <input type="file" name="pic" accept="image/*"></p>
          <label for="inputEmailLabel" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="signUpEmail" required autofocus>
          <label for="inputUsername" class="sr-only">Username</label>
          <input type="username" id="inputUsername" name = "signUpUsername" class="form-control" placeholder="Username" required>
          <p id="usernameDirections">Note: Username must be at least 5 characters long</p>

          

           <label for="inputPassword" class="sr-only">Password</label>
           <input type="password" id="inputPassword" class="form-control" name="signUpPassword" placeholder="Password" required>

           <label for="inputPassword" class="sr-only">RetypePassword</label>
           <input type="password" name="signUpRetypePassword" id="inputPassword2" class="form-control" placeholder="Retype Password" required>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Sign up</button>
      </form>

    </div> <!-- /container -->
  </div>
</div> <!--Page 1-->


<!--page 2-->
    <div id="page2" style="display:none">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger"  style = "color:black;" href="index.html">Incline</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="index.html#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="index.html#services">Key Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="index.html">Mockup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="authentication.jsp">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="#page-top">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End of header-->
  <br/>
  <br/>
    <div class="well" id="well" style="background-color: #f48942">
    <div class="container">
	 <!-- Old line: <form class="form-signin" method="post" action="http://localhost:8080/incline1/examples.SessionKeeper"> -->
      <form class="form-signin"  action="SignUpForm.php" method="post">
        <div>
          <button id = "signUpSwitchButton" style="float: right; -webkit-transition: all 3s ease 0s" onclick="switchInToUp()">Sign Up</button>
        </div>
        
        <h2 class="form-signin-heading" style="text-align: center">Sign In</h2>
  
          <label for="inputUsername" class="sr-only">Username</label>
          <input type="usename" id="inputUsername" name = "username"
          class="form-control" placeholder="Username" required>
          
           <label for="inputPassword" class="sr-only">Password</label>
           <input type="password" name = "password" id="inputPassword" class="form-control" placeholder="Password" required>

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>

        <button onclick="validateData()" class="btn btn-lg btn-primary btn-block" type="submit" name="submitForm">Sign in</button>
      </form>

    </div> <!-- /container -->
  </div>
</div>

<!--end of page 2-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="actions.js"> </script>
  </body>
</html>