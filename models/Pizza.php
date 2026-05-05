<?php
class Pizza
{
    private $conn;
    private $tabela = "pizzas";
 
    private $idPizza;
    private $name;
    private $ingredientes;
    private $valor;
 
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
 
  }