package runtimeExec;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.util.ArrayList;
import java.util.List;

class LeeFichero {
	  
    File archivo = null;
    FileReader fr = null;
    BufferedReader br = null;
    String fichero=null;
    List<String>url=new ArrayList<String>();
    
    public LeeFichero(String fichero){
  	  this.fichero=fichero;
  	  
    }
    
    public List leer() {
    	  

  		      try {
  		         // Apertura del fichero y creacion de BufferedReader para poder
  		         // hacer una lectura comoda (disponer del metodo readLine()).
  		         archivo = new File (fichero);
  		         fr = new FileReader (archivo);
  		         br = new BufferedReader(fr);

  		         // Lectura del fichero
  		         String linea;
  		         while((linea=br.readLine())!=null)
  		           
  		         	if(linea.contains("https")) {
  		         		url.add(linea);
  		         	 //System.out.println(linea);
  		         	}
  		      }
  		      catch(Exception e){
  		         e.printStackTrace();
  		      }finally{
  		         // En el finally cerramos el fichero, para asegurarnos
  		         // que se cierra tanto si todo va bien como si salta 
  		         // una excepcion.
  		         try{                    
  		            if( null != fr ){   
  		               fr.close();     
  		            }                  
  		         }catch (Exception e2){ 
  		            e2.printStackTrace();
  		         }
      }
			return url;
   
    
   
    }
}