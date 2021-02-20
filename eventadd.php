<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php include '../classes/Category.php';?>
<?php include '../classes/Event.php';?>


<?php
    $ev = new Event();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) ) {

		$insertEvent = $ev->eventInsert($_POST, $_FILES);
	}

?>



<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Event</h2>
        <div class="block">               

        <?php
        
        if(isset($insertEvent)) {
            echo $insertEvent;
        }

        ?>

         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="eventName" placeholder="Enter Event Name..." class="medium" />
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
                            $getCat = $cat->getAllCat();
                            if($getCat) {
                                while($result = $getCat->fetch_assoc()) {
                            ?>

                            <option value="<?php echo $result['catId']; ?>"><?php echo $result['catName']; ?></option>
                            <?php } }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Date of the Event</label>
                    </td>
                    <td>
                    <input name="date" type="date" id="date" min="2021-01-01" max="2021-12-31"  />
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Time of the Event</label>
                    </td>
                    <td>
                    <input name="time" type="time" id="date" min="2021-01-01" max="2021-12-31"  />
                    </td>
                </tr>
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea rows="5" columns="40" name="body"></textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Ticket Price</label>
                    </td>
                    <td>
                        <input name="price" type="text" placeholder="Enter Price..." class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="image" />
                    </td>
                </tr>
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
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


