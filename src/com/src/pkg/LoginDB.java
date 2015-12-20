package com.src.pkg;

import java.sql.*;

public class LoginDB {
	public static boolean validate (String name, String pass){
		boolean status = false;
		Connection conn = null;
		try {
			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/Webapp", "root", "");
			//System.out.println("Connection Established");
			PreparedStatement ps = conn.prepareStatement("Select * from login where name=? and password=?");
			ps.setString(1,name);
			ps.setString(2,pass);
			ResultSet rs = ps.executeQuery();
			status=rs.next();
			
		} catch (SQLException ex){
			ex.printStackTrace();
		} catch (ClassNotFoundException e) {
			e.printStackTrace();
		}
		return status;
	}
	
	public static void close(Connection con) {
        try {
            con.close();
        } catch (Exception ex) {
        }
    }
}
