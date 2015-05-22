<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
	
	<?php 
		
	foreach($results as $row){
		echo $row->id;
		echo $row->name;
		echo "<br>";
	}	
		
	?>
	
</div>

</body>
</html>