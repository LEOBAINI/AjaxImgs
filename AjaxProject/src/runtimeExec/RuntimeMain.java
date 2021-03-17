package runtimeExec;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

public class RuntimeMain {

	public static void main(String[] args) {
		
		//ejecutar(".\\ejecutar.bat");
		List<?> lista=null;
		List<String> urlsComa=new ArrayList<String>();
		LeeFichero f=new LeeFichero("C:\\xampp\\htdocs\\Amazon\\client_logs 2021 03 15.log");
		lista=f.leer();
		for(Object str : lista)
		{
		    urlsComa.addAll(extraerPathPorComas(extraerUrls(str)));
		}
		
		for(int i=0;i<urlsComa.size()/2;i++)// la mitad porque el log repite 2 veces el mismo evento https
		{
		  //  System.out.println(urlsComa.get(i));
		    bajarFoto("C:\\xampp\\htdocs\\Amazon\\ejecutar.bat","\""+urlsComa.get(i)+"\"","\"C:\\xampp\\htdocs\\Amazon\\imagenes\\"+String.valueOf(i)+".jpg\"");
		   //C:\\xampp\\htdocs\\Amazon\\ejecutar.bat
		}
	}
		/**
		 * 
		 * @param Recibe un string del log de la receptora
		 * @return devuelve desde el comienzo del "https" hasta el fin de la cadena "]_"
		 */
		public static String extraerUrls(Object str) {
		String uri=((String) str).substring(((String) str).indexOf("https"), ((String) str).indexOf("]_"));
		return uri;
		
	}
		/**
		 * 
		 * @param palabra
		 * @return Extrae la cadena de urls que están separadas por coma, como urls ejecutables en un navegador
		 */
	public static ArrayList<String> extraerPathPorComas(String palabra) {
		List <String> urls=new ArrayList<String>();
		int i=0;
		
		int maxIndex=palabra.length();
		while(palabra.contains(",")) {
			urls.add(palabra.substring(0, palabra.indexOf(',')));
			palabra=palabra.substring(urls.get(i).length()+1, maxIndex);			
			maxIndex=palabra.length();
			i++;
		}
		urls.add(palabra);				
		return (ArrayList<String>) urls;
	}
	
	public static void bajarFoto(String rutaEjecutable,String rutaOriginal,String RutaDestino) {
		 
		  try {
		    Runtime.getRuntime().exec(rutaEjecutable+" "+RutaDestino+" "+rutaOriginal);
		    System.out.println("Ejecutando -> "+rutaEjecutable+" "+RutaDestino+" "+rutaOriginal);
		  } catch (IOException e1) {
		    System.out.println("Error..");
		    System.out.println(e1.getMessage());
		  }
		}
	


}
	
	
		
	
	


		      
	

