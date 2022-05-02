import java.util.*;

public class Registro {
    private ArrayList<Studente> studenti = new ArrayList<Studente>();
    private ArrayList<Professore> professori = new ArrayList<Professore>();

    public static void main(String[] args) {
        
    }

    public void aggiungiStudente(String cf, String nome, String cognome, GregorianCalendar dataNascita, String classe) throws Exception {
        // Controlla se uno studente con il CF esiste già. Se esiste eccezione, altrimenti aggiungi il nuovo studente
        for (Studente studente : studenti) {
            if (studente.getCf() == cf) {
                throw new Exception("Esiste già uno studente con questo codice fiscale");
            }
            else
            {
                studenti.add(new Studente(cf, nome, cognome, dataNascita, classe));
            }
        }
    }
}
