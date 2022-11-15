<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>
<script>
</script>
<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "blogs_prorject");
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$u_name = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$role = $_REQUEST['txt_role'];
		$sql = "SELECT * FROM singupacc WHERE uname='" . $u_name . "' AND pass='" . $password . "' AND rol='" . $role . "' AND accStatus='Accpet' limit 1";

		$result = mysqli_query($conn, $sql);
		if ($row = mysqli_fetch_assoc($result)) {
			$_SESSION['newid'] = $row['id'];
			$_SESSION['firstName'] = $row['fname'];
			$_SESSION['lastNamee'] = $row['lname'];
			$_SESSION['Email'] = $row['email'];
			$_SESSION['Uname'] = $row['uname'];
			if ($role == 'Admin') {
				header("Location:http://localhost/blogs/dashboardadmin.php");
			} elseif ($role == 'Author') {
				header("Location:http://localhost/blogs/dashboardauthor.php");
			} elseif ($role == 'User') {
				header("Location:http://localhost/blogs/dashboardview.php");
			}
		} else {
		?>
			<script>
				alert('Your username or password is incorrect!');
			</script>

		<?php
			header("Location:http://localhost/blogs/loginauthor.php");
		}
		mysqli_close($conn);

		?>
	</center>
</body>

</html>