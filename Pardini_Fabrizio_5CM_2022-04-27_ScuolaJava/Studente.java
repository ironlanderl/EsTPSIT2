import java.util.*;

public class Studente extends Persona {
    private String classe;

    public Studente(String cf, String nome, String cognome, GregorianCalendar dataNascita, String classe) throws Exception {
        super(cf, nome, cognome, dataNascita);
        this.setClasse(classe);
    }

    public String getClasse() {
        return classe;
    }
    
    public void setClasse(String classe) throws Exception {
        // controllo che la classe non sia null o vuota
        if (classe == null || classe.isBlank()) {
            throw new Exception("La classe non può essere null o vuota");
        } else {
            this.classe = classe;
        }
    }
}
