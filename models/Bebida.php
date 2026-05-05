<?php
class Bebida
{
    private $conn;
    private $tabela = "bebidas";
 
    private $idBebida;
    private $nome;
    private $tamanho;
    private $valor;
    private $categoria;
 
    public function __construct($db) {
        $this->conn = $db;
    }
  public function getall(){
    //Salvando a query nem SQL em uma variável
      $query = "SELECT idBebida, nome, tamanho, valor, categoria FROM "  . $this->tabela;
 
      //Preparando a query para ser executada, ou seja, vinculando ela à conexão
      $stmt = $this->conn->prepare($query);
 
      //Executando a query
      $stmt->execute(); //Executando a query no BD
 
        return $stmt; //Retornando o resultado da query
  }
 
  }