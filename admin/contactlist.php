<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php include '../classes/Contact.php';?>
<?php include_once '../helpers/Format.php';?>

<?php

	$co = new Contact();
	$fm = new Format();


?>


<div class="grid_10">
    <div class="box round first grid">
        <h2>Contact List</h2>
        <div class="block">
            <table class="data display datatable" id="example">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
					$getCon = $co->getAllContacts();
					if($getCon) {
					$i = 0;
					while($result = $getCon->fetch_assoc()) {
						$i++;
					?>

                    <tr class="odd gradeX">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $result['name']; ?></td>
                        <td><?php echo $result['email']; ?></td>
                        <td><?php echo $result['content']; ?></td>
                    </tr>
                    <?php }}?>

                </tbody>
            </table>

        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    setupLeftMenu();
    $('.datatable').dataTable();
    setSidebarHeight();
});
</script>
<?php include 'inc/footer.php';?>