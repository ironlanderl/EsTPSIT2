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
        this.setDataScadenza(dataScadenza, dataStipula);
    }
    // metodi get
    public String getAtleta(){
        return atleta.getCF();
    }
    public String getSquadra(){
        return squadra.getNome();
    }
    public GregorianCalendar getDataStipula(){
        return dataStipula;
    }
    public GregorianCalendar getDataScadenza(){
        return dataScadenza;
    }
    // metodi set con controllo ed eccezzioni
    public void setAtleta(Atleta atleta) throws Exception {
        // controllo che l'atleta non sia null
        if(atleta == null){
            throw new Exception("L'atleta non può essere null");
        }
        else{
            this.atleta = atleta;
        }
    }
    public void setSquadra(Squadra squadra) throws Exception {
        // controllo che la squadra non sia null
        if(squadra == null){
            throw new Exception("La squadra non può essere null");
        }
        else{
            this.squadra = squadra;
        }
    }
    public void setDataStipula(GregorianCalendar dataStipula) throws Exception {
        // controllo che la data di stipula non sia null
        if(dataStipula == null){
            throw new Exception("La data di stipula non può essere null");
        }
        else{
            this.dataStipula = dataStipula;
        }
    }
    public void setDataScadenza(GregorianCalendar dataScadenza, GregorianCalendar dataStipula) throws Exception {
        // controllo che la data di scadenza non sia null e che sia successiva alla data di stipula
        if(dataScadenza == null){
            throw new Exception("La data di scadenza non può essere null");
        }
        else if(dataScadenza.before(dataStipula)){
            throw new Exception("La data di scadenza deve essere successiva alla data di stipula");
        }
        else{
            this.dataScadenza = dataScadenza;
        }
    }
}
