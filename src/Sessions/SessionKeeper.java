package Sessions;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class SessionKeeper
 */
@WebServlet("/Sessions.SessionKeeper")
public class SessionKeeper extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
   
	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	public void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
		// TODO Auto-generated method stub
		
	}

	
	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	public void doPost(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {
		// TODO Auto-generated method stub
		res.setContentType("TEXT/HTML");
		PrintWriter out = res.getWriter();
		out.println("<!DOCTYPE html>\n" + 
				"<html lang=\"en\">\n" + 
				"\n" + 
				"\n" + 
				"<meta charset=\"utf-8\">\n" + 
				"    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\n" + 
				"    <meta name=\"description\" content=\"\">\n" + 
				"    <meta name=\"author\" content=\"\">\n" + 
				"\n" + 
				"<title>Current Technical Mockup</title>\n" + 
				"\n" + 
				"<!-- Bootstrap core CSS -->\n" + 
				"    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">\n" + 
				"\n" + 
				"    <!-- Custom fonts for this template -->\n" + 
				"    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">\n" + 
				"    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>\n" + 
				"    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>\n" + 
				"\n" + 
				"    <!-- Plugin CSS -->\n" + 
				"    <link href=\"vendor/magnific-popup/magnific-popup.css\" rel=\"stylesheet\">\n" + 
				"\n" + 
				"    <!-- Custom styles for this template -->\n" + 
				"    <link href=\"css/creative.css\" rel=\"stylesheet\">\n" + 
				"    \n" + 
				"\n" + 
				"\n" + 
				"\n" + 
				" </head>\n" + 
				"\n" + 
				"\n" + 
				"<!-- Navbar -->\n" + 
				"<div class= \"container\">\n" + 
				"<nav class=\"navbar navbar-default navbar-static-top\">\n" + 
				"  <div class=\"container\">\n" + 
				"  <a href=\"#\"> <i class = \"fa fa-envelope-o\" aria-hidden=\"true\">Messages</i> </a>\n" + 
				"  <a href=\"signup.html\"> <i class = \"fa fa-drivers-license-o\">Account</i></a>\n" + 
				"  <a href=\"index.html\"> <i class = \"fa fa-fire\"> Incline </i> </a>\n" + 
				"  <a href=\"#\"> <i class = \"fa fa-gears\">Settings</i></a>  \n" + 
				"</div>\n" + 
				"</nav>\n" + 
				"</div>\n" + 
				"\n" + 
				"<div class=\"container\">\n" + 
				"	<div class=\"row\">\n" + 
				"        <div class=\"col-sm-8 col-sm-offset-2\">\n" + 
				"            <form id=\"custom-search-form\" class=\"form-search form-horizontal pull-right\">\n" + 
				"                <div class=\"input-append span12\">\n" + 
				"                    <input type=\"text\" class=\"search-query\" placeholder=\"Search\">\n" + 
				"                   <a href=\"#\" class=\"btn\">\n" + 
				"      <i class=\"fa fa-search\" aria-hidden=\"true\"></i> \n" + 
				"    </a>\n" + 
				"                </div>\n" + 
				"            </form>\n" + 
				"        </div>\n" + 
				"	</div>\n" + 
				"</div>"); //Profile Page Header
		
		
		HttpSession session = req.getSession ();
		out.print   ("<BR>Session Status: ");
	      if (session.isNew())
	      {
	         out.println ("New Session.");
	      }
	      else
	      {
	         out.println ("Old Session.");
	      }
	    out.println("<br/>");  
	    session.setMaxInactiveInterval(20);//time in seconds
		out.println("Session ID Number: "+ session.getId());
		
		//TODO Insert Middle of Profile Page HERE
		String user = req.getParameter("username");
		out.println("<br/>");
		//out.print("<h2>Hello</h2>");
		out.print("Welcome to Incline, "+user);
		out.println("<br/>");
		out.print("The current max inactive session interval is set to: " + session.getMaxInactiveInterval() + " seconds.");

	
		
		out.println("  <!-- Bottom of PAGE -->\n" + 
				"\n" + 
				"   <!-- Bootstrap core JavaScript -->\n" + 
				"    <script src=\"vendor/jquery/jquery.min.js\"></script>\n" + 
				"    <script src=\"vendor/popper/popper.min.js\"></script>\n" + 
				"    <script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>\n" + 
				"\n" + 
				"    <!-- Plugin JavaScript -->\n" + 
				"    <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>\n" + 
				"    <script src=\"vendor/scrollreveal/scrollreveal.min.js\"></script>\n" + 
				"    <script src=\"vendor/magnific-popup/jquery.magnific-popup.min.js\"></script>\n" + 
				"\n" + 
				"    <!-- Custom scripts for this template -->\n" + 
				"    <script src=\"js/creative.min.js\"></script>\n" + 
				"\n" + 
				""
				+ "</body>\n" + 
				"    </html>"); // Profile Page Footer
		
		
	}

}
