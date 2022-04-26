// Pardini_Fabrizio_5CM_2022-04-09_PallamanoJava

import java.util.*;

public class Atleta{
    private String CF;
    private String nome;
    private String cognome;
    private String numMaglia;
    private GregorianCalendar dataNascita;
    // costruttore
    public Atleta(String CF, String nome, String cognome, String numMaglia, GregorianCalendar dataNascita) throws Exception {
        this.setCF(CF);
        this.setNome(nome);
        this.setCognome(cognome);
        this.setNumMaglia(numMaglia);
        this.setDataNascita(dataNascita);
    }
    // metodi get
    public String getCF(){
        return CF;
    }
    public String getNome(){
        return this.nome;
    }
    public String getCognome(){
        return this.cognome;
    }
    public String getNumMaglia(){
        return this.numMaglia;
    }
    public GregorianCalendar getDataNascita(){
        return this.dataNascita;
    }
    // metodi set
    private void setCF(String CF) throws Exception {
        // controllo che il codice fiscale non sia null o vuoto
        if(CF == null || CF.isBlank()){
            throw new Exception("Il codice fiscale non può essere null o vuoto");
        }
        else if (CF.length() != 16){
            throw new Exception("Il codice fiscale deve essere lungo 16 caratteri");
        }
        else{
            this.CF = CF;
        }
    }
    public void setNome(String nome) throws Exception {
        // controllo che il nome non sia null o vuoto
        if(nome == null || nome.isBlank()){
            throw new Exception("Il nome non può essere null o vuoto");
        }
        else{
            this.nome = nome;
        }
    }
    public void setCognome(String cognome) throws Exception {
        // controllo che il cognome non sia null o vuoto
        if(cognome == null || cognome.isBlank()){
            throw new Exception("Il cognome non può essere null o vuoto");
        }
        else{
            this.cognome = cognome;
        }
    }
    public void setNumMaglia(String numMaglia) throws Exception {
        // controllo che il numero di maglia non sia null o vuoto
        if(numMaglia == null || numMaglia.isBlank()){
            throw new Exception("Il numero di maglia non può essere null o vuoto");
        }
        else{
            this.numMaglia = numMaglia;
        }
    }
    private void setDataNascita(GregorianCalendar dataNascita) throws Exception {
        // controllo che la data di nascita non sia null o non sia dopo di adesso
        if(dataNascita == null || dataNascita.after(new GregorianCalendar())){
            throw new Exception("La data di nascita non può essere null o dopo di oggi");
        }
        else{
            this.dataNascita = dataNascita;
        }
    }
}