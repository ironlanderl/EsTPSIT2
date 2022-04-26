// Pardini_Fabrizio_5CM_2022-04-09_PallamanoJava

import java.util.*;

public class Contratto {
    private Atleta atleta;
    private Squadra squadra;
    private GregorianCalendar dataStipula;
    private GregorianCalendar dataScadenza;
    // Costruttore
    public Contratto(Atleta atleta, Squadra squadra, GregorianCalendar dataStipula, GregorianCalendar dataScadenza) throws Exception {
        this.setAtleta(atleta);
        this.setSquadra(squadra);
        this.setDataStipula(dataStipula);
        this.setDataScadenza(dataScadenza);
    }
    // metodi get
    public Atleta getAtleta(){
        return atleta;
    }
    public Squadra getSquadra(){
        return squadra;
    }
    public GregorianCalendar getDataStipula(){
        return dataStipula;
    }
    public GregorianCalendar getDataScadenza(){
        return dataScadenza;
    }
    // metodi set con controllo ed eccezzioni
    private void setAtleta(Atleta atleta) throws Exception {
        // controllo che l'atleta non sia null
        if(atleta == null){
            throw new Exception("L'atleta non può essere null");
        }
        else{
            this.atleta = atleta;
        }
    }
    private void setSquadra(Squadra squadra) throws Exception {
        // controllo che la squadra non sia null
        if(squadra == null){
            throw new Exception("La squadra non può essere null");
        }
        else{
            this.squadra = squadra;
        }
    }
    private void setDataStipula(GregorianCalendar dataStipula) throws Exception {
        // controllo che la data di stipula non sia null
        if(dataStipula == null){
            throw new Exception("La data di stipula non può essere null");
        }
        else{
            this.dataStipula = dataStipula;
        }
    }
    public void setDataScadenza(GregorianCalendar dataScadenza) throws Exception {
        // controllo che la data di scadenza non sia null e che sia successiva alla data di stipula
        if(dataScadenza == null){
            throw new Exception("La data di scadenza non può essere null");
        }
        else if(dataScadenza.before(this.dataStipula)){
            throw new Exception("La data di scadenza deve essere successiva alla data di stipula");
        }
        else{
            this.dataScadenza = dataScadenza;
        }
    }
}
