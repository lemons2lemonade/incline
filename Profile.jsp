<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!-- Gets all the files from examples package -->
<%@ page import="examples.*" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Profile</title>


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
<body class="bg">
	
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
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style = "color:black;" href="resetSessionLogOut.jsp">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End of header-->
  <br/>
  <br/>
  <div class="well" id="well" style="background-color: #f48942">
  <!-- Put stuff in here -->
   <jsp:useBean id="sessionScope" class="examples.sessionProfile" scope="session"/>
   
   <p>Welcome, <%=session.getAttribute("userName") %></p>
   <br/>
   <p>Email: <%=session.getAttribute("emailAddress") %><p>
   
   
   
   
  </div>
  <script type="text/javascript" src="actions.js"> </script>





</body>
</html>