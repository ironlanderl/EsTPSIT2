import java.util.*;

public class Registro {
    private static ArrayList<Studente> studenti = new ArrayList<Studente>();
    private static ArrayList<Professore> professori = new ArrayList<Professore>();

    public static void main(String[] args) {
        // Aggiunta

        try {
            aggiungiStudente("1111111111111111", "Mario", "Rossi", new GregorianCalendar(1990, Calendar.JANUARY, 1), "1A");
        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.exit(1);
        }
        try {
            aggiungiProfessore("2222222222222222", "Giovanni", "Verdi", new GregorianCalendar(1990, Calendar.JANUARY, 1), "Matematica");
        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.exit(1);
        }

        // Modifica
        try {
            modificaStudente("1111111111111111", "Mario", "Rossi", "2B");
        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.exit(1);
        }

        try {
            modificaProfessore("2222222222222222", "Giovanni", "Verdi", "Storia");
        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.exit(1);
        }

        // Elimina
        try {
            eliminaStudente("1111111111111111");
        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.exit(1);
        }

        try {
            eliminaProfessore("2222222222222222");
        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.exit(1);
        }

    }

    public static void aggiungiStudente(String cf, String nome, String cognome, GregorianCalendar dataNascita,
            String classe) throws Exception {
        // Controlla se uno studente con il CF esiste già. Se esiste eccezione,
        // altrimenti aggiungi il nuovo studente
        for (Studente studente : studenti) {
            if (studente.getCf() == cf) {
                throw new Exception("Esiste già uno studente con questo codice fiscale");
            }
        }
        studenti.add(new Studente(cf, nome, cognome, dataNascita, classe));
    }

    public static void aggiungiProfessore(String cf, String nome, String cognome, GregorianCalendar dataNascita,
            String materia) throws Exception {
        // Controlla se uno professore con il CF esiste già. Se esiste eccezione,
        // altrimenti aggiungi il nuovo professore
        for (Professore professore : professori) {
            if (professore.getCf() == cf) {
                throw new Exception("Esiste già uno professore con questo codice fiscale");
            }
        }
        professori.add(new Professore(cf, nome, cognome, dataNascita, materia));
    }

    public static void modificaStudente(String cf, String nome, String cognome, String classe) throws Exception {
        for (Studente studente : studenti) {
            if (studente.getCf() == cf) {
                studente.setNome(nome);
                studente.setCognome(cognome);
                studente.setClasse(classe);
                return;
            }
        }
        throw new Exception("Non esiste uno studente con questo codice fiscale");
    }

    public static void modificaProfessore(String cf, String nome, String cognome, String materia) throws Exception {
        for (Professore professore : professori) {
            if (professore.getCf() == cf) {
                professore.setNome(nome);
                professore.setCognome(cognome);
                professore.setMateria(materia);
                return;
            }
        }
        throw new Exception("Non esiste uno professore con questo codice fiscale");
    }

    public static void eliminaStudente(String cf) throws Exception {
        for (Studente studente : studenti) {
            if (studente.getCf() == cf) {
                studenti.remove(studente);
                return;
            }
        }
        throw new Exception("Non esiste uno studente con questo codice fiscale");
    }

    public static void eliminaProfessore(String cf) throws Exception {
        for (Professore professore : professori) {
            if (professore.getCf() == cf) {
                professori.remove(professore);
                return;
            }
        }
        throw new Exception("Non esiste uno professore con questo codice fiscale");
    }
}
