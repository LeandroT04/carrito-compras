<?php
require_once 'Database.php';

class Product {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getProducts() {
        $this->db->query("SELECT * FROM products");
        return $this->db->resultset();
    }

    public function getProductById($id) {
        $this->db->query("SELECT * FROM products WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
}
?>
