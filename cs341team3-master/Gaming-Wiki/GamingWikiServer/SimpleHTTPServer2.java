import java.net.ServerSocket;
import java.net.Socket;
import java.io.InputStreamReader;
import java.io.IOException;
import java.io.BufferedReader;
import java.util.Date;
public class SimpleHTTPServer2 {
    public static void main(String[] args) throws IOException {
        System.out.println("Listening for connection on port 4201");
        ServerSocket server = new ServerSocket(4201);
        while (true) {               
           try(Socket socket = server.accept()) {
               Date today = new Date();
               String httpResponse = "HTTP/1.1 200 OK\r\n\r\n"+today+"hello";
               socket.getOutputStream().write(httpResponse.getBytes("UTF-8"));
            }
            
        }
    }
}