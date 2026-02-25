public class Carro {
    private String cor;
    private String modelo;
    private int ano;

    public Carro(String cor, String modelo, int ano)  {
        this.cor = cor;
        this.modelo = modelo;
        this.ano = ano; 
      }

      public void acelerar(){
        System.out.println(modelo + " está acelerando! ");
      }
      public void frear () {
     System.out.println(modelo + " está freando! ");

      }


}
