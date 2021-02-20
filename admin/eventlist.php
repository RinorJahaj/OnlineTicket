<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php include '../classes/Event.php';?>
<?php include_once '../helpers/Format.php';?>

<?php

	$ev = new Event();
	$fm = new Format();


?>

<?php

if(isset($_GET['delevent'])) {
	$id = $_GET['delevent'];
	$delevent = $ev->delEventById($id);
}
?>


<div class="grid_10">
    <div class="box round first grid">
        <h2>Event List</h2>
        <div class="block">  

			<?php
				if(isset($delevent)) {
					echo $delevent;
				}
			?>

            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>SL</th>
					<th>Event Name</th>
					<th>Category</th>
					<th>Date</th>
					<th>Time</th>
					<th>Description</th>
					<th>Image</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>

			<?php
				$getEv = $ev->getAllEvents();
				if($getEv) {
					$i = 0;
					while($result = $getEv->fetch_assoc()) {
						$i++;

			?>

				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result['eventName']; ?></td>
					<td><?php echo $result['catName']; ?></td>
					<td><?php echo $result['date']; ?></td>
					<td><?php echo $result['time']; ?></td>
					<td><?php echo $fm->textShorten($result['body'], 50); ?></td>
					<td><img src="<?php echo $result['image']; ?>" height="40px"; width="60px"></td>
					<td><?php echo $fm->formatPrice($result['price']); ?></td>
					<td><a href="eventedit.php?eventid=<?php echo $result['eventId']; ?>">Edit</a> || <a onclick="return confirm('Are you sure ?')" href="?delevent=<?php echo $result['eventId']; ?>">Delete</a></td>
				</tr>
				<?php }}?>
			</tbody>
		</table>
       </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
