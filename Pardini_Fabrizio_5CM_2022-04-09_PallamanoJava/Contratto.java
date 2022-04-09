import java.util.*;

public class Contratto {
    private int id;
    private Atleta atleta;
    private Squadra squadra;
    private Date dataStipula;
    private Date dataScadenza;
    // Costruttore
    public Contratto(int id, Atleta atleta, Squadra squadra, Date dataStipula, Date dataScadenza) {
        this.id = id;
        this.atleta = atleta;
        this.squadra = squadra;
        this.dataStipula = dataStipula;
        this.dataScadenza = dataScadenza;
    }
    // metodi
    public int getId(){
        return id;
    }
    public Atleta getAtleta(){
        return atleta;
    }
    public Squadra getSquadra(){
        return squadra;
    }
    public Date getDataStipula(){
        return dataStipula;
    }
    public Date getDataScadenza(){
        return dataScadenza;
    }
}
