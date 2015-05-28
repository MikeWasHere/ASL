
  
     <!------------------ Google maps code ------------------>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery-1.11.0.min.js"></script>
    
    
<!-- Replace with chrisGPS for NoGPS feature-->    
<!--
<script>
x = navigator.geolocation;
	
	x.getCurrentPosition(success, failure);
	
	function success(position) {
		
		// Fetch the coordinates
		
		var mylat = position.coords.latitude;
		var mylong = position.coords.longitude;
		
		// Gooogle-API-ready latitudes and longtitude string
		
		var coords = new google.maps.LatLng(mylat, mylong);
		
		//setting up google maps
		
		var mapOptions = {
			zoom: 16,
			center: coords,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		
		// Creating the Map
		
		var map = new google.maps.Map(document.getElementById("map"), mapOptions);
		
		// Create a marker
		
		var marker = new google.maps.Marker({map: map, position: coords});
		
		var getAPI = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='+mylat+','+mylong+'&radius=500&key=AIzaSyAQrULkSyEYLkpUlovopMwSz4xIGpd2-rk';
				
		jQuery.get(getAPI,function(data){
				
			console.log(data)
		});

		
		/*
$('#lat').html(mylat);
		$('#long').html(mylong);
*/
	}
	
	function failure(){
		$('#lat').html("<p>It didn't work, cordinated not available!</p>")
	}

</script>
-->
<!-- Replace with chrisGPS for NoGPS feature END--> 

<style>
	
	#map{
		top: 100px; 
		width: 400px;
		height: 400px;
	}
	
</style>
    <!------------------ Google maps code End ------------------>

</head>

<body id="2nd">

<div id="Destination">
    <h1>Destination</h1>
    <form id="2ndForm">
        <input name="signinButton" type="text" class="masterTooltip AB" placeholder="Please enter where you are departing from" title="departing from" required />

        <input name="signinButton" type="text" class="masterTooltip AB" placeholder="Please enter where your going" title= "where your going" required />
     <label class="where">
        <input type="radio" name="Leaving" class="where">Depart at
     </label>

     <label class="where">
        <input type="radio" name="Arriving" class="where">Arrive by
     </label>

    <label class="where">Choose the day
        <input class="yas" type="date" name="Date">
    </label>

    <label class="where">Choose the time
        <input class="yas" type="time">
    </label>

        <button name="signinButton" type="submit" id="getBus" onClick="findLocation()" value="Sign In">Find it</button>
    </form>

</div>

<div id="map">

<?php echo $map['html'] ?>


</div>



</body>
