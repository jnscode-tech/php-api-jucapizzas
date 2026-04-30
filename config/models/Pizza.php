<?php
class Pizza {
    private $conn;
    private $table_name = "pizzas";

    public $id;
    public $name;
    public $description;
    public $price;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Métodos para criar, ler, atualizar e deletar pizzas
}