
import java.sql.*;  
public class GuideTable
{
    public DB db;
    public GuideTable()
    {
        this.db = new DB();
    }

    public static void main(String args[]) {
        GuideTable guideTable = new GuideTable();
        
    }
    
    public void getAll() {
        try {
            Statement stmt = this.db.conn.createStatement();
            ResultSet rs = stmt.executeQuery( "SELECT * FROM GuideTable" );
        } catch(Exception e) {
            System.out.println("Something went wrong in GuideTable");
        }
    }
}
