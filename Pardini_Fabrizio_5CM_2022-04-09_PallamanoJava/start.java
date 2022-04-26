// Pardini_Fabrizio_5CM_2022-04-09_PallamanoJava

import java.util.*;

public class start {
    public static void main(String[] args) {
        // Creo gli oggetti
        Atleta atleta = null;
        Squadra squadra = null;
        Contratto contratto = null;

        // creo un oggetto di tipo Atleta
        try {
            atleta = new Atleta("1111111111111111", "Mario", "Rossi", "123",
                    new GregorianCalendar(1990, Calendar.JANUARY, 1));
        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.exit(1);
        }
        // creo un oggetto di tipo Squadra
        try {
            squadra = new Squadra("A.S. ROMAGNA HANDBALL", "Imola");
        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.exit(1);
        }
        // creo un oggetto di tipo Contratto
        try {
            contratto = new Contratto(atleta, squadra, new GregorianCalendar(2018, Calendar.MAY, 21),
                    new GregorianCalendar(2019, Calendar.SEPTEMBER, 14));
        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.exit(1);
        }

        // stampo i dati dell'atleta
        System.out.println("Atleta: " + atleta.getNome() + " " + atleta.getCognome() + " " + atleta.getCF() + " "
                + atleta.getNumMaglia() + " " + atleta.getDataNascita().get(Calendar.YEAR) + "/"
                + (atleta.getDataNascita().get(Calendar.MONTH) + 1) + "/"
                + atleta.getDataNascita().get(Calendar.DAY_OF_MONTH));
        // stampo i dati della squadra
        System.out.println("Squadra: " + squadra.getNome() + " " + squadra.getSede());
        // stampo i dati del contratto
        System.out.println("Contratto: " + " " + contratto.getAtleta().getCF() + " " + contratto.getSquadra().getNome() + " "
                + contratto.getDataStipula().get(Calendar.YEAR) + "/"
                + (contratto.getDataStipula().get(Calendar.MONTH) + 1) + "/"
                + contratto.getDataStipula().get(Calendar.DAY_OF_MONTH) + " "
                + contratto.getDataScadenza().get(Calendar.YEAR) + "/"
                + (contratto.getDataScadenza().get(Calendar.MONTH) + 1) + "/"
                + contratto.getDataScadenza().get(Calendar.DAY_OF_MONTH));
    }
}
