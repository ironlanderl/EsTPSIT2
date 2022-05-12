import java.io.*;
import java.net.*;

public class test {
	
	public static void main(String[] args){
		URL u = null;
		try {
			u = new URL("https://stallman.org/"); //indirizzo di URL passato come argomento} "https://www.google.it/"
		}catch (MalformedURLException e){
			System.err.println("URL errato: " + u);
		}
		URLConnection c = null;
		try {
			System.out.print("Connecting...");
			c = u.openConnection(); 
			c.connect();
			System.out.println("..OK");
			InputStreamReader is = new InputStreamReader(c.getInputStream());
			BufferedReader r = new BufferedReader(is);
			System.out.println("Reading data...");
			String line = null;
			while((line=r.readLine())!=null) {
				System.out.println(line);
			}
		}catch (IOException e) {
			System.err.println(e);
		}
	}
}

