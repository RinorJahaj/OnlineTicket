<?php 
 
 define('CONTACT_DB', 'C:\xampp\htdocs\OnlineTickets');

 include_once CONTACT_DB . "\lib\Database.php";
 include_once CONTACT_DB . "\helpers\Format.php";

?>


<?php
class Contact {
	private $db;
	private $fm;
 
    public function __construct(){
       $this->db   = new Database();
       $this->fm   = new Format();
	}

    public function contactInsert($data) {
        $name = mysqli_real_escape_string($this->db->link, $data['name']);
        $email = mysqli_real_escape_string($this->db->link, $data['email']);
        $content = mysqli_real_escape_string($this->db->link, $data['content']);

        if($name == "" || $email == "" || $content == "") {
        $msg = "<span class='error'>All fields are requried </span>";
        return $msg;
        }

        $query = "INSERT INTO contact(name, email, content)
        VALUES ('$name', '$email', '$content')";

        $inserted_row = $this->db->insert($query);
        if($inserted_row) {
            $msg = "<span class='success'>Contact Submited. We will contact you soon. </span>";
            return $msg;
        } else {
            $msg = "<span class='error'>Please try again. </span>";
            return $msg;
        }
   
    }

    public function getAllContacts() {
        $query = "SELECT * FROM contact ORDER BY id";

        $result = $this->db->select($query);
        return $result;
    }    
}


?>