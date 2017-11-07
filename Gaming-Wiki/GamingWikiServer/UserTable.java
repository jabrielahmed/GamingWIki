import java.sql.*;  
import java.sql.PreparedStatement;
public class UserTable{
    public DB db;
    public UserTable()
    {
        this.db = new DB();
    }

    public static void main(String args[]) {
        UserTable userTable = new UserTable();
        //userTable.getAll();
        userTable.removeUser("'bobguy12'");
    }

    public void removeUser(String userName) {
        try {
            
            String sql = "DELETE FROM UserTable WHERE UserName = "+userName;
                   System.out.println(sql);
            Statement stmt = this.db.conn.createStatement();
            stmt.execute(sql);
            System.out.println("success");
        } catch(Exception e) {
            System.out.println(e);
            System.out.println("failed to delete user");
        }
    }

    public void getAll() {
        try {
            Statement stmt = this.db.conn.createStatement();
            ResultSet rs = stmt.executeQuery( "SELECT * FROM UserTable" );
        } catch(Exception e) {
            System.out.println("Something went wrong in user Table");
        }
    }

}
