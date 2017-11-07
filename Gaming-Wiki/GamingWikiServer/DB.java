
/**
 * Write a description of class DB here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
import java.sql.*; 
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.PrintWriter;
import java.net.InetSocketAddress;
import com.sun.net.httpserver.HttpExchange;
import com.sun.net.httpserver.HttpHandler;
import com.sun.net.httpserver.HttpServer;
public class DB
{
    // instance variables - replace the example below with your own
    public Connection conn;
    public static void main(String arg[]) throws IOException{
        final int portNumber = 4201;
        System.out.println("Creating server socket on port"+ portNumber);
        HttpServer server = HttpServer.create(new InetSocketAddress(portNumber),0);
        server.createContext("/test", new MyHandler());
        server.setExecutor(null);
        server.start();
        
    }
    
    static class MyHandler implements HttpHandler {
        @Override
        public void handle(HttpExchange t) throws IOException {
            String response = "Server is up and listening";
            String stuff = "hey this is another message";
            t.sendResponseHeaders(200, response.length());
            OutputStream os = t.getResponseBody();
            os.write(response.getBytes());
            os.write(stuff.getBytes());
            os.close();
        }
    }

    public DB()
    {
        try{
            Class.forName("com.mysql.jdbc.Driver");          
            conn = DriverManager.getConnection( "jdbc:mysql://softeng.cs.uwosh.edu/fischt77?user=fischt77&password=s0533977");
        } catch(Exception e) {
            System.out.println("failed to connect to database");
            System.out.println(e);
        }
    }
}
