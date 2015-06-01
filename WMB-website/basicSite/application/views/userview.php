<!DOCTYPE html>
<html>
<head>
	<title></title>
	     <!------------------ Google maps code ------------------>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
	x = navigator.geolocation;
	
	x.getCurrentPosition(success, failure);
	
	p = {
		coords:{latitude:'0.24',longitude:'0.25'}
		};
		
		
	function success(position) {
		
		// Fetch the coordinates
		var mylat = <?php echo $location['lat'] ?>;
		var mylong = <?php echo $location['long'] ?>;
		
		// Gooogle-API-ready latitudes and longtitude string
		
		var coords = new google.maps.LatLng(mylat, mylong);
		
		//setting up google maps
		
		var mapOptions = {
			zoom: 16,
			center: coords,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		
		var map = new google.maps.Map(document.getElementById("map"), mapOptions);
		
		// Create a marker
		
		var marker = new google.maps.Marker({map: map, position: coords});
		p = position;
		var url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='+mylat+','+mylong+'&radius=500&key=AIzaSyDBAXq9xOI_ynPffhkPhM1Z-8qFY1fUjVE';
		
	}
		
	function failure(){
		$('#lat').html("<p>It didn't work, cordinated not available!</p>")
	}

</script>
<style>
	
	#map{
		top: 5%; 
		width: 470px;
		height: 300px;
		left: 30px;
	}
	
</style>
</head>
<body>

<div class="row">
	<div class="col-md-12">
		<h2 style="text-align: center;">Lynx 436S</h2>
		<h4 style="text-align: center;">Your bus is: 4 minutes away.</h4>
		
		<div id="map">
		
	
		</div>
	</div>
</div>


<button name="checkIn" type="submit" id="getBus" value="Sign In">Check in Bus</button>
        <button name="stopTrackingButton" type="submit" id="stopBus" onClick="clearTimeout(myVar);" value="stop">Check out Bus</button>

</body>
</html>
