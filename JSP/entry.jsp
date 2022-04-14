<%@page import="java.sql.*" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>database connectvity</title>
        
    </head>
    <body>
        <%
           int a=Integer.parseInt(request.getParameter("t1")); 
           String name=request.getParameter("t2");
                Class.forName("com.mysql.jdbc.Driver");
                Connection conn=DriverManager.getConnection("jdbc:mysql://localhost:3306/bvdu","root","");
                PreparedStatement pst=conn.prepareStatement("insert into student values(?,?)"); //ps
                pst.setInt(1,a);
            pst.setString(2,name);
            pst.executeUpdate();
            conn.close();   
            out.print("Data registered successfully");
            %>
    </body>
</html>
