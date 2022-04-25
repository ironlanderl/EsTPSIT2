public class Squadra {
    private String nome;
    private String sede;
    // Costruttore
    public Squadra(String nome, String sede) throws Exception {
        this.setNome(nome);
        this.setSede(sede);
    }
    // metodi get
    public String getNome(){
        return nome;
    }
    public String getSede(){
        return sede;
    }
    // metodi set
    public void setNome(String nome) throws Exception {
        // Controllo che il nome non sia vuoto
        if(nome == null || nome.isBlank()){
            throw new Exception("Il nome della squadra non può essere vuoto");
        }
        else{
            this.nome = nome;
        }
    }
    public void setSede(String sede) throws Exception{
        // Controllo che la sede non sia vuota
        if(sede == null || sede.isBlank()){
            throw new Exception("La sede della squadra non può essere vuota");
        }
        else{
            this.sede = sede;
        }
    }
}
