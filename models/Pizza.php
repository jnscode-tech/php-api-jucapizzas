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

    // Métodos para criar, ler, atualizar e deletar pizzas
}