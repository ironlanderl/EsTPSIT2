import java.util.*;

public class Atleta{
    private String CF;
    private String nome;
    private String cognome;
    private String numMaglia;
    private Date dataNascita;
    // costruttore
    public Atleta(String CF, String nome, String cognome, String numMaglia, Date dataNascita){
        this.CF = CF;
        this.nome = nome;
        this.cognome = cognome;
        this.numMaglia = numMaglia;
        this.dataNascita = dataNascita;
    }
    // metodi
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
    public Date getDataNascita(){
        return this.dataNascita;
    }
}