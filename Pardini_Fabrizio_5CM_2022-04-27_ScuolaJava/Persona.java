import java.util.*;

public class Persona {

    private String cf;
    private String nome;
    private String cognome;
    private GregorianCalendar dataNascita;

    public Persona(String cf, String nome, String cognome, GregorianCalendar dataNascita) throws Exception {
        this.setCF(cf);
        this.setNome(nome);
        this.setCognome(cognome);
        this.setDataNascita(dataNascita);
    }

    public String getCf() {
        return cf;
    }

    private void setCF(String CF) throws Exception {
        // controllo che il codice fiscale non sia null o vuoto
        if (CF == null || CF.isBlank()) {
            throw new Exception("Il codice fiscale non può essere null o vuoto");
        } else if (CF.length() != 16) {
            throw new Exception("Il codice fiscale deve essere lungo 16 caratteri");
        } else {
            this.cf = CF;
        }
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) throws Exception {
        // controllo che il nome non sia null o vuoto
        if (nome == null || nome.isBlank()) {
            throw new Exception("Il nome non può essere null o vuoto");
        } else {
            this.nome = nome;
        }
    }

    public String getCognome() {
        return cognome;
    }

    public void setCognome(String cognome) throws Exception {
        // controllo che il cognome non sia null o vuoto
        if (cognome == null || cognome.isBlank()) {
            throw new Exception("Il cognome non può essere null o vuoto");
        } else {
            this.cognome = cognome;
        }
    }

    public GregorianCalendar getDataNascita() {
        return dataNascita;
    }

    private void setDataNascita(GregorianCalendar dataNascita) throws Exception {
        // controllo che la data di nascita non sia null o non sia dopo di adesso
        if (dataNascita == null || dataNascita.after(new GregorianCalendar())) {
            throw new Exception("La data di nascita non può essere null o dopo di oggi");
        } else {
            this.dataNascita = dataNascita;
        }
    }

}