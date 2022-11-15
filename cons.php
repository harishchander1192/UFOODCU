<?php
		
		$conn = mysqli_connect("localhost", "root", "", "blogs_prorject");
		
		
		if($conn){
			
			?>
			<script>
			//alert('conn suss');
			</script>
			<?php 
		}
		else {
			
			die("not conn". mysqli_connect_error());
			
		}
		?>