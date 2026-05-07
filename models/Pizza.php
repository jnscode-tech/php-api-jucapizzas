<?php
class Pizza
{
    private $conn;
    private $tabela = "pizzas";
 
    public $idPizza;
    public $nome;
    public $ingredientes;
    public $valor;
 
    public function __construct($db) {
        $this->conn = $db;
    }
  public function getall(){
    //Salvando a query nem SQL em uma variável
      $query = "SELECT idPizza, nome, ingredientes, valor FROM "  . $this->tabela;
 
      //Preparando a query para ser executada, ou seja, vinculando ela à conexão
      $stmt = $this->conn->prepare($query);
 
      //Executando a query
      $stmt->execute(); //Executando a query no BD
 
        return $stmt; //Retornando o resultado da query
  }
  public function get(){
    //Localhost/api/pizza/get.php?id=7
    $query = 'SELECT
    idPizza,
    nome,
    ingredientes,
    valor
    FROM
    '. $this->tabela .'
    WHERE
    idPizza = ?
    LIMIT 1';
  
  //Preparar a query
  $stmt = $this->conn->prepare($query);
  
  //Vincula o ID
  $stmt->bindParam(1, $this->idPizza);

  //Executar a query
  $stmt->execute();

  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  // Define as propriedades
  $this->nome = $row['nome'];
  $this->ingredientes = $row['ingredientes'];
  $this->valor = $row['valor'];
}
}