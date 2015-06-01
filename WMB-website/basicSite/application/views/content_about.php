
  
     <!------------------ Google maps code ------------------>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery-1.11.0.min.js"></script>
    
    
<!-- Replace with chrisGPS for NoGPS feature-->    

<script>

x = navigator.geolocation;
	
	x.getCurrentPosition(success, failure);
	
	p = {
		coords:{latitude:'0.24',longitude:'0.25'}
		};
		
		
	function success(position) {
		
		// Fetch the coordinates
		var mylat = <?php echo 'hello world'; ?>;
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
		p = position;
		var url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='+mylat+','+mylong+'&radius=500&key=AIzaSyDBAXq9xOI_ynPffhkPhM1Z-8qFY1fUjVE';
						
	/*
	jQuery.post(p,function(data){
				
			console.log(data)
		});
*/
		
		
		
		
$(document).ready( function(){

// Detect if hyperlink has been clicked //
$("button[name=checkIn]").click( function(){
 
// Pass the form values to the php file 
$.post('site.php', p, function(ret){

    // Detect if values have been passed back   
    if(ret!=""){
    // alert windows shows the returned value from php
    alert("Value passed back from the php file... " + ret);
    }
    
});
 
// Important stops the page refreshing
return false;
 
}); 
});
		
		
		
		
		
		
		/*
$('#lat').html(mylat);
		$('#long').html(mylong);
*/
	}
	
	/* var myVar = setInterval(function(){success(p)},3000);  <-- this will automatically run it when the page starts.*/ 
	
	function failure(){
		$('#lat').html("<p>It didn't work, cordinated not available!</p>")
	}

</script>

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
    <form id="2ndForm" method="post" action="<?php echo base_url()?>site/coor">
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

        <button name="checkIn" type="submit" id="getBus" value="Sign In">Check in Bus</button>
        <button name="stopTrackingButton" type="submit" id="stopBus" onClick="clearTimeout(myVar);" value="stop">Check out Bus</button>
    </form>

</div>

	<!-- <a href="<?php echo base_url(); ?>site/coor">Finnna Find it</a> -->

<div id="map">



</div>



</body>
