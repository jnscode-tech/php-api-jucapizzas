<?php
 
class Pizza {
    private $conn;
 
    private $tabela = "pizzas";
   
    public $idPizza;
 
    public $nome;
 
    public $ingredientes;
 
    public $valor;
 
public function __construct($db) {
    $this->conn = $db;
}
 
public function getall() {
    //salvando a query em SQL em uma variavel
    $query = "SELECT idPizza, nome, ingredientes, valor FROM " . $this ->tabela;
 
 
    //preparando a query para ser execultada, ou seja, vinculando ela à conexão.
    $stmt = $this->conn->prepare($query);
 
    $stmt->execute();
 
    return $stmt;
 
 
}
 
public function get() {
    $query = "SELECT idPizza, nome, ingredientes, valor
              FROM pizzas
              WHERE idPizza = ?
              LIMIT 1";
 
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->idPizza);
    $stmt->execute();
 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    if ($row) {
        $this->nome        = $row['nome'];
        $this->ingredientes = $row['ingredientes'];
        $this->valor       = $row['valor'];
    }
}
}