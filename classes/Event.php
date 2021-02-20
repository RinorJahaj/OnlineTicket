<?php

include_once '../lib/Database.php';
include_once '../helpers/Format.php';

class Event {

    private $db;
    private $fm;

    public function __construct() {
        $this->db = new Database();
        $this->fm = new Format();
    }


    public function eventInsert($data, $file) {
        // $eventName = $this->fm->validation($eventName);
        $eventName = mysqli_real_escape_string($this->db->link, $data['eventName']);
        $catId = mysqli_real_escape_string($this->db->link, $data['catId']);
        $date = mysqli_real_escape_string($this->db->link, $data['date']);
        $time = mysqli_real_escape_string($this->db->link, $data['time']);
        $body = mysqli_real_escape_string($this->db->link, $data['body']);
        $price = mysqli_real_escape_string($this->db->link, $data['price']);
    
        $permited = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        //foto.png
        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "upload/".$unique_image;

        if($eventName == "" || $catId == "" || $date == "" || $time == "" || $body == "" || $price == "") {
            $msg = "<span class='error'>All fields are requried </span>";
            return $msg;
        } else {
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO event(eventName, catId, date, time, body, price, image)
            VALUES ('$eventName', '$catId', '$date', '$time', '$body', '$price', '$uploaded_image')";
       
    
            $inserted_row = $this->db->insert($query);
            if($inserted_row) {
                $msg = "<span class='success'>Event Created. </span>";
                return $msg;
            } else {
                $msg = "<span class='error'>Event Did Not Created. </span>";
                return $msg;
            }
        }
    }


    public function getAllEvents() {
        $query = "SELECT event.*, category.catName
            FROM event
            INNER JOIN category
            ON event.catId = category.catId
            ORDER BY event.eventId DESC
         ";

        $result = $this->db->select($query);
        return $result;
    }    


    public function getEventById($id) {
        $query = "SELECT * FROM event WHERE eventId = '$id' ";
        $result = $this->db->select($query);
        return $result;
    }

    
    public function eventUpdate($data, $file , $id) {
        
     $eventName = mysqli_real_escape_string($this->db->link, $data['eventName']);
     $catId = mysqli_real_escape_string($this->db->link, $data['catId']);
     $date = mysqli_real_escape_string($this->db->link, $data['date']);
     $time = mysqli_real_escape_string($this->db->link, $data['time']);
     $body = mysqli_real_escape_string($this->db->link, $data['body']);
     $price = mysqli_real_escape_string($this->db->link, $data['price']);
 
     $permited = array('jpg','png','jpeg','gif');
     $file_name = $file['image']['name'];
     $file_size = $file['image']['size'];
     $file_temp = $file['image']['tmp_name'];
 
     $div = explode('.', $file_name);
     $file_ext = strtolower(end($div));
     $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
     $uploaded_image = "upload/".$unique_image;
     if ($eventName == "" || $catId == "" || $date == "" || $time == "" || $body == "" || $price == "" ) {
     	$msg = "<span class='error'>Field Must Not be empty .</span> ";
    			return $msg;
     }else {
     if (!empty($file_name)) {
     if ($file_size > 1054589) {
     	echo "<span class='error'>Image Size should be less then 1MB .</span>";
     }elseif (in_array($file_ext, $permited) === false) {
     	echo "<span class='error'> You can Upload Only".implode(',', $permited)."</span>";
      } else{
          move_uploaded_file($file_temp, $uploaded_image);
          $query = "UPDATE event
            SET 
            eventName = '$eventName',
            catId = '$catId',
            date = '$date',
            time = '$time',
            body = '$body',
            price = '$price',
            image = '$uploaded_image'
            WHERE eventId = '$id' ";
      
          $updated_row = $this->db->update($query);
          if ($updated_row) {
    			$msg = "<span class='success'>Event Updated Successfully.</span> ";
    			return $msg;
    		}else {
    			$msg = "<span class='error'>Event Not Updated .</span> ";
    			return $msg;
    		} 
     }
 
      } else{
           $query = "UPDATE event
            SET 
            eventName = '$eventName',
            catId = '$catId',
            date = '$date',
            time = '$time',
            body = '$body',
            price = '$price'
            WHERE eventId = '$id'";
 
          $updated_row = $this->db->update($query);
          if ($updated_row) {
    			$msg = "<span class='success'>Event Updated Successfully.</span> ";
    			return $msg; 
    		}else {
    			$msg = "<span class='error'>Event Not Updated .</span> ";
    			return $msg; 
    		    } 
            
       		  }
		}
    }
   

    public function delEventById($id) {
        $query = "SELECT * FROM event WHERE eventId = '$id' ";
        $getData = $this->db->select($query);
        if($getData) {
            while($delImg = $getData->fetch_assoc()) {
                $dellink = $delImg['image'];
                unlink($dellink);
            }
        }

        $delquery = "DELETE FROM event WHERE eventId = '$id'";
        $deldata = $this->db->delete($delquery);
        if($deldata) {
            $msg = "<span class='success'>Event Deleted.</span>";
            return $msg;
        } else {
            $msg = "<span class='error'>Event Not Deleted.</span>";
            return $msg;
        }
    }
}
?>