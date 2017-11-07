import java.net.ServerSocket;
import java.net.Socket;
import java.io.InputStreamReader;
import java.io.IOException;
import java.io.BufferedReader;
import java.util.Date;
public class SimpleHTTPServer {
    public static void main(String[] args) throws IOException {
        System.out.println("Listening for connection on port 4200");
        ServerSocket server = new ServerSocket(4200);
        while (true) {               
            //try(Socket socket = server.accept()){
              //  Date today = new Date();
              //  String httpResponse = "HTTP/1.1 200 OK\r\n\r\n"+today;
               // socket.getOutputStream().write(httpResponse.getBytes());
           // }
           Socket socket = server.accept();
           InputStreamReader isr = new InputStreamReader(socket.getInputStream());
           BufferedReader reader = new BufferedReader(isr);
           String line = reader.readLine();
           while(!line.isEmpty()){
               System.out.println(line);
               line = reader.readLine();
            }
            
        }
    }
}