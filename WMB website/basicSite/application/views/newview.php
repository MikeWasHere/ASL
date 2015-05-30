<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php echo $map['js'] ?>

</head>
<body>


<script>
	<?php 
	$phpText = "Are you near?"
?>

var deAlert = <?php echo json_encode($phpText); ?>;
alert(deAlert);
</script>

<p>ayyy my guyyy.</p>


<?php echo $map['html'] ?>

</body>
</html>
