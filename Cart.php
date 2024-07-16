<?php
require_once 'Database.php';

class Cart {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addToCart($productId) {
        session_start();
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]++;
        } else {
            $_SESSION['cart'][$productId] = 1;
        }
    }

    public function removeFromCart($productId) {
        session_start();
        if (isset($_SESSION['cart'][$productId])) {
            unset($_SESSION['cart'][$productId]);
        }
    }

    public function getCartItems() {
        session_start();
        return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    }

    public function clearCart() {
        session_start();
        unset($_SESSION['cart']);
    }
}
?>
