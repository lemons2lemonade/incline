<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="examples.*,java.io.*,java.util.*" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>ProfileSessionUpdate</title>
</head>
<body>

<jsp:useBean id="sessionScope" class="examples.sessionProfile" scope="session">
	<jsp:setProperty name="sessionScope" property="*"/>
</jsp:useBean> 
<%
	String email = request.getParameter("signUpEmail");
	String user = request.getParameter("signUpUsername");
	session.setAttribute("emailAddress", email);
	session.setAttribute("userName", user);
	response.sendRedirect("authentication.jsp");
%>
</body>
</html>