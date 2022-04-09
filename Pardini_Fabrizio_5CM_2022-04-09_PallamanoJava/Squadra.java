public class Squadra {
    private String nome;
    private String sede;
    // Costruttore
    public Squadra(String nome, String sede) {
        this.nome = nome;
        this.sede = sede;
    }
    // metodi
    public String getNome(){
        return nome;
    }
    public String getSede(){
        return sede;
    }
}
