<?php include_once('login.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sites</title>
<link rel="stylesheet" href="css/flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {	  
	 $('.flexslider').flexslider();	 
	
  }); 
  
  function imgError(image) {
    image.onerror = "this.style.display = 'none'";
    image.src = "images/uploads/trans.jpg";
    return true;
} 
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<style>

div#map-canvas {
     height: 540px;
}
 


  </style>
<script>

function initialize() {
	
        //alert("End "+latitude[0]+" "+ window.longitude[0])
  var myLatlng = new google.maps.LatLng(﻿40.7401, -73.8407);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };
	
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  latitude = new Array(); //myObject[numberline] = "textEachLine";
  longitude = new Array();
  <?php    $count = 1;   ?>
	$.get('myFile.txt', function(myContentFile) {
   var lines = myContentFile.split("\n");
	var n=m=0;
   for(var i  in lines){
      if(i%2==0)
      var tmpLat = lines[i];
	  else{
		  var tmpLng = lines[i];
		//alert(" Starting "+tmpLat+" "+tmpLng)
	  var myLatlng = new google.maps.LatLng(tmpLat, tmpLng);
		var marker = _newGoogleMapsMarker({
			_map: map,
            _lat: tmpLat,
            _lng: tmpLng,
            _data: i
		
        });
	  }
	  //
   }
}, 'text');		
        
		

	//}
}
  function _newGoogleMapsMarker(param) {
    var r = new google.maps.Marker({
        map: param._map,
        position: new google.maps.LatLng(param._lat, param._lng),
        title: param._title
    });
	if (param._data) {
        google.maps.event.addListener(r, 'click', function () {				
			$.ajax({type:"POST",
		url: "test.php?count="+param._data,
		success: function(data){
			$('#tp').empty();
		$('#tp').append(data);}})    
        });
    }
    return r;
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<a style="color:#FFF" href="home.php"><h2 style="float:left;font-size: 24px;font-weight: 500;font-family: 'Open Sans', sans-serif;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCITYSYNTH
<br>THE URBAN GALAXY</h2></a>
<div style="width:100%; height:70%;">
<br />
<br />
<br />
<br />
<br />
<?php 
if (!isset($_SESSION['user']))
echo"<h2><a href='sign up.php'>Login </a> to see the map</h2>";
else
{
?>

<div style="width:48%;float:left" id="map-canvas">
</div>
<div style="width:50%; height:100%;float:right" id="tp">

</div> 
<?php } ?>
</div>
</body>
</html>