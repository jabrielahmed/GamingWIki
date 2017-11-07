import java.sql.*;  
public class GameTable
{
    public DB db;
    public GameTable()
    {
        this.db = new DB();
    }

    public static void main(String args[]) {
        GameTable gameTable = new GameTable();
        
    }
    
    public void getAll() {
        try {
            Statement stmt = this.db.conn.createStatement();
            ResultSet rs = stmt.executeQuery( "SELECT * FROM GameTable" );
        } catch(Exception e) {
            System.out.println("Something went wrong in game Table");
        }
    }
}
