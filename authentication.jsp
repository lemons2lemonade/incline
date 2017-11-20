<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="examples.*" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Authentication</title>
</head>
<body>
	<h2>Hello, this is the authentication page</h2>
	<jsp:useBean id="sessionScope" class="examples.sessionProfile" scope="session"/>
	
	<%
		if(session.getAttribute("userName")==null||session.getAttribute("userName").equals("")){
			%>
			<jsp:forward page="signup.php"></jsp:forward>
			<%
		} else {
			 %>
			<jsp:forward page="Profile.jsp"></jsp:forward>
			<%
		}
	%>
	
	
</body>
</html>