import java.util.*;

public class Professore extends Persona {
    private String materia;

    public Professore(String cf, String nome, String cognome, GregorianCalendar dataNascita, String materia) throws Exception {
        super(cf, nome, cognome, dataNascita);
        this.setMateria(materia);
    }

    public String getMateria() {
        return materia;
    }

    public void setMateria(String materia) throws Exception {
        // controllo che la materia non sia null o vuota
        if (materia == null || materia.isBlank()) {
            throw new Exception("La materia non può essere null o vuota");
        } else {
            this.materia = materia;
        }
    }
}
