<?php 
 
 define('REGISTER_DB', 'C:\xampp\htdocs\OnlineTickets');

 include_once REGISTER_DB . "\lib\Database.php";
 include_once REGISTER_DB . "\helpers\Format.php";

?>


<?php
class User {
	private $db;
	private $fm;
 
    public function __construct(){
       $this->db   = new Database();
       $this->fm   = new Format();
	}

    public function customerRegistration($data) {
        $name = mysqli_real_escape_string($this->db->link, $data['name']);
        $email = mysqli_real_escape_string($this->db->link, $data['email']);
        $zip = mysqli_real_escape_string($this->db->link, $data['zip']);
        $password = mysqli_real_escape_string($this->db->link, md5($data['password']));

        if ($name == "" || $email == "" || $zip == "" || $password == "") {
            $msg = "<span class='error'>Field Must Not be empty .</span> ";
                   return $msg;
        }
        $mailquery = "SELECT * FROM customer WHERE email='$email' LIMIT 1";
        $mailchk = $this->db->select($mailquery);
        if($mailchk != false) {
            $msg = "<span class='error'>Email already exits.</span> ";
            return $msg;
        } else {
            $query = "INSERT INTO customer(name, email, zip, password)
            VALUES ('$name', '$email', '$zip', '$password')";
       
            $inserted_row = $this->db->insert($query);
            if($inserted_row) {
                $msg = "<span class='success'>Account Created. </span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Account Did Not Created. </span>";
                return $msg;
            }
        }
    }

    public function customerLogin($data) {
        $email = mysqli_real_escape_string($this->db->link, $data['email']);
        $password = mysqli_real_escape_string($this->db->link, md5($data['password']));

        if ($email == "" || $password == "") {
            $msg = "<span class='error'>Field Must Not be empty .</span> ";
                   return $msg;
        }

        $query = "SELECT * FROM customer WHERE email='$email' AND password='$password' ";
        $result = $this->db->select($query);
        if($result != false) {
            $value = $result->fetch_assoc();
            Session::set("cuslogin", true);
            Session::set("cmrId", $value['id']);
            Session::set("cmrName", $value['name']);
            header("Location:eventPage.php");
        } else {
            $msg = "<span class='error'>Email or Password do not match .</span> ";
            return $msg;   
        }
    }

    public function getCustomerData($id) {
        $query = "SELECT * FROM customer WHERE id='$id' ";
        $result = $this->db->select($query);
        return $result;
    }

    public function customerUpdate($data, $cmrId) {
        $name = mysqli_real_escape_string($this->db->link, $data['name']);
        $email = mysqli_real_escape_string($this->db->link, $data['email']);
        $zip = mysqli_real_escape_string($this->db->link, $data['zip']);

        if ($name == "" || $email == "" || $zip == "") {
            $msg = "<span class='error'>Field Must Not be empty .</span> ";
                   return $msg;
        } else {
             $query = "UPDATE customer
              SET
              name = '$name',
              email = '$email',
              zip = '$zip'
              WHERE id = '$cmrId'";
              $update_row = $this->db->update($query);
               if($update_row) {
               $msg = "<span class='success'>Profile Updated.</span>";
               return $msg;
               } else {
               $msg = "<span class='error'>Profile Did Not Updated.</span>";
               return $msg;
            }
        }
    }
}



?>