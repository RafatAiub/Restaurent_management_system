<%@page import="java.sql.*"%>
<%
string name=request.getParameter("name");
string email=request.getParameter("email");
string address=request.getParameter("address");
string phone=request.getParameter("phone");
string password=request.getParameter("password");

out.println(name+email+address+phone+password);


try{
	Connection conn=DriveManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","restaurent_management_system","1110210850");
	PrepareStatement ps= conn.prepareStatement("insert into registration values(?,?,?,?,?)");
	ps.setstring(1,name);
	ps.setstring(2,email);
	ps.setstring(3,address);
	ps.setstring(4,phone);
	ps.setstring(5,password);
	int x=ps.executeUpdate();
	if(x!=0)(
		out.print("sign up succeed");
	)else{
		out.print("<<<<<<<<<<<<<<some thing went wrong >>>>>>>>>>")
	}
}catch(Exception e){
	out.print(e);
}
%>