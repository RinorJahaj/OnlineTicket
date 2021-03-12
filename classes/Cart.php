<?php 
 
define('CART_DB', 'C:\xampp\htdocs\OnlineTickets');

// include '../config/config.php';
include_once CART_DB . "\lib\Database.php";
include_once CART_DB . "\helpers\Format.php";


// include_once '../lib/Database.php';
// include_once '../helpers/Format.php';
?>


<?php
class Cart {
	private $db;
	private $fm;
 
    public function __construct(){
       $this->db   = new Database();
       $this->fm   = new Format();
	}

    public function addToCart($quantity, $id) {
        $quantity = $this->fm->validation($quantity);
        $quantity = mysqli_real_escape_string($this->db->link, $quantity);
        $eventId = mysqli_real_escape_string($this->db->link, $id);
        $sId = session_id();

        $squery = "SELECT * FROM event WHERE eventId = '$eventId' ";
        $result = $this->db->select($squery)->fetch_assoc();

        $eventName = $result['eventName'];
        $price = $result['price'];
        $image = $result['image'];

        $chquery = "SELECT * FROM cart WHERE eventId = '$eventId' AND sId = '$sId' ";
        $getEv = $this->db->select($chquery);
        if($getEv) {
            $msg = "Event already added!";
            return $msg;
        } else {
            $query = "INSERT INTO cart(sId, eventId, eventName, price, image, quantity)
            VALUES ('$sId', '$eventId', '$eventName', '$price', '$image', '$quantity')";
    
            $inserted_row = $this->db->insert($query);
            if($inserted_row) {
               header("Location:cart.php");
            } else {
                header("Location:404.php");
            }
        }
    }

    public function getCartEvent() {
            $sId = session_id();
            $query = "SELECT * FROM cart WHERE sId = '$sId' ";
            $result = $this->db->select($query);
            return $result;
        }

    public function updateCartQuantity($cartId, $quantity) {
        $cartId = mysqli_real_escape_string($this->db->link, $cartId);
        $quantity = mysqli_real_escape_string($this->db->link, $quantity);
        
        $query = "UPDATE cart
        SET
        quantity = '$quantity'
        WHERE cartId = '$cartId'";
        $update_row = $this->db->update($query);
        if($update_row) {
            $msg = "<span class='success'>Quantity Updated.</span>";
            return $msg;
        } else {
            $msg = "<span class='error'>Quantity Did Not Updated.</span>";
            return $msg;
            }
        }

    public function delEventByCart($delId) {
        $cartId = mysqli_real_escape_string($this->db->link, $cartId);
        $query = "DELETE FROM cart WHERE cartId = '$delId' ";
        $deldata = $this->db->delete($query);
        if($deldata) {
            echo "<script>window.location = 'cart.php'; </script> ";
        } else {
            $msg = "<span class='error'>Event Not Deleted.</span>";
            return $msg;
            }
        } 

    public function delCustomerCart() {
        $sId = session_id();
        $query = "DELETE FROM cart WHERE sId='$sId' ";
        
        $this->db->delete($query);

        }

    public function orderEvent($cmrId) {
            $sId = session_id();
            $query = "SELECT * FROM cart WHERE sId = '$sId' ";
            $getEv = $this->db->select($query);
            if($getEv) {
                while($result = $getEv->fetch_assoc()) {
                    $eventId = $result['eventId'];
                    $eventName = $result['eventName'];
                    $quantity = $result['quantity'];
                    $price = $result['price'];
                    $image = $result['image'];

                    $query = "INSERT INTO allorders(cmrId, eventId, eventName, price, image, quantity)
                    VALUES ('$cmrId', '$eventId', '$eventName', '$price', '$image', '$quantity')";
            
                    $inserted_row = $this->db->insert($query);
                }
            }
        }
    }
?>