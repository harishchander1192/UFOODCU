<?php
session_start();

include 'cons.php';


$id = $_REQUEST['pid'];
$deletequery = " DELETE  FROM `singupacc` where id=$id ";


if (mysqli_query($conn, $deletequery)) {
?>
	<script>
		alert('Select row Deleted from database successfully.');
	</script>
<?php
	header("Location:http://localhost/blogs/manageaccount.php");
} else {
	echo "ERROR" . mysqli_error($conn);
}




?>