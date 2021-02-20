<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Event.php';  ?>
<?php include '../classes/Category.php';  ?> 
 
 
<?php 
 if (!isset($_GET['eventid'])  || $_GET['eventid'] == NULL ) {
     echo "<script>window.location = 'eventedit.php';  </script>";
  }else {
    $id = $_GET['eventid']; // get this id from productlist.php page and take this with one variable as $id 
 
  }
 
   $ev =  new Event(); // Create object for Product Class 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) ) {
       $updateEvent = $ev->eventUpdate($_POST, $_FILES, $id); // This method is for update data 
    }
 
?> 
 
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Event</h2>
        <div class="block">  
 
<?php 
if (isset($updateEvent)) {  // Show update data message 
   echo $updateEvent;
}
 
?>
 
   <?php 
     $getEvent = $ev->getEventById($id);  // in our product class i create one method with id 
     if ($getEvent) {
        while ($value = $getEvent->fetch_assoc()) {
            # code...
          ?>
 
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                      <input type="text" name="eventName" value="<?php echo $value['eventName']; ?>" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="catId">
                            <option>Select Category</option>
                      <?php
                    $cat = new Category();
                    $getCat =  $cat->getAllCat();
                    if ($getCat) {
                       while ($result = $getCat->fetch_assoc()) {
                           
                      
                 ?>
                       <option 
                      
                       <?php 
 
                           if ($value['catId'] == $result['catId']) { ?>
                              selected = "selected"
                      <?php }  ?> value="<?php echo $result['catId'];  ?>"><?php echo $result['catName']; ?></option>
 
                       <?php   }  } ?>
                            
                        </select>
                    </td>
                </tr>
				
                <tr>
                    <td>
                    <label>Date of the Event</label>
                    </td>
                    <td>
                    <input name="date" value="<?php echo $value['date']; ?>" type="date" id="date" min="2021-01-01" max="2021-12-31"  />
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Time of the Event</label>
                    </td>
                    <td>
                    <input name="time" value="<?php echo $value['time']; ?>" type="time" id="date" min="2021-01-01" max="2021-12-31"  />
                    </td>
                </tr>

				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea name="body">
                           <?php echo  $value['body']; ?>
 
                        </textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" name="price" value="<?php echo  $value['price']; ?>" class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="<?php echo $value['image'];?>" height="90px; width="80px;"><br/>
                        <input type="file" name="image" />
                    </td>
                </tr>

 
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
 
      <?php  } } ?>
 
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>