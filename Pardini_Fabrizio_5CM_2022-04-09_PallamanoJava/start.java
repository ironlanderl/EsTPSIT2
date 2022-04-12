import java.util.*;

public class start {
    public static void main(String[] args) {
        // creo un oggetto di tipo Atleta
        Atleta atleta = new Atleta("12345678901", "Mario", "Rossi", "123", new Date(1980, 0, 1));
        // creo un oggetto di tipo Squadra
        Squadra squadra = new Squadra("Juventus", "Milano");
        // creo un oggetto di tipo Contratto
        Contratto contratto = new Contratto(1, atleta, squadra, new Date(2018, 5, 21), new Date(2019, 9, 14));
        // stampo i dati dell'atleta
        System.out.println("Atleta: " + atleta.getNome() + " " + atleta.getCognome() + " " + atleta.getCF() + " " + atleta.getNumMaglia() + " " + atleta.getDataNascita());
        // stampo i dati della squadra
        System.out.println("Squadra: " + squadra.getNome() + " " + squadra.getSede());
        // stampo i dati del contratto
        System.out.println("Contratto: " + contratto.getId() + " " + contratto.getAtleta() + " " + contratto.getSquadra() + " " + contratto.getDataStipula() + " " + contratto.getDataScadenza());
    }
}
