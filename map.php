
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="th-TH" xml:lang="th">
<head>
<!--
Created by Artisteer v3.0.0.38499
Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--
<meta http-equiv="Content-Type" content="text/html; charset=TIS-620" />
-->
<title>RMUTi, Computer Network and Internet Usage Report System</title>
<meta name="description" content="Description" />
<meta name="keywords" content="Keywords" />


</head>
<body>

</div>
</div>

<div class="art-logo"></div>
</div>
<div class="cleared reset-box"></div>
	<div class="art-nav">
		<div class="art-nav-l"></div>
		<div class="art-nav-r"></div>
		<div class="art-nav-outer">
			<ul class="art-hmenu">

		</div>
		<span class="l"></span><span class="r"></span><span class="t"></span>
	</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-content-layout">
<style>
#RMUTiMapArea {
	position:relative;
	float:left;
	width: 500px;
	height:400px;
	margin-left: 25;
}
#configArea {
	display: none;
	position:relative;
	float:left;
	width:150px;
	padding:3px;
	padding-left: 10;
	padding-top:0;
	padding-right:0;
}
.btn {
	margin-bottom:2px;
	padding:2px 10px 2px 10px;
	-moz-border-radius:10px;
	-o-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	border:2px solid rgb(100,100,100);
	/*cursor:pointer;*/
	color:white;
	background-color: rgb(100,100,100);
}
.clk {
	cursor:pointer;
}
.alri {
	text-align: right;
}
textarea{
	width:260px;
	padding:10px;
	height:200px;
}
div.ap_list {
	width: 210px;
	height: 470px;
	overflow-y: scroll;
	cursor: hand;
}
li.ap_list_odd {
	background-color: rgb(200,200,200);
}

</style>
<!--script type="text/javascript" src="../include/js/anaa/anaa.js"></script-->
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwge1FSHpFtVtNqLlI4Mj3vnoi-lbyos0&callback=initMap"
  type="text/javascript"></script>
<div id="main">
<div id="RMUTiMapArea"></div>
<div id="configArea">
<div class="btn">AP location:<br/>
<div id='lat' class="alri">Latitude</div>
<div id='lng' class="alri">Longitude</div>
</div>


</div>
</div>
</div>
<script type="text/javascript">
var user_login = 'prakai';
var user_fname = '»ÃÐ¡ÒÂ';
var user_lname = '¹Ò´Õ';
var map;
var marker;
var markers = {};

// Center of RMUTi map
var cenLatLng = new google.maps.LatLng(14.987297, 102.119254);

var aps = new Array();

aps['4B.2.1'] = { building:'', floor:'1', lat:14.9874, lng:102.117, note:''};




var nLat = 0;
var nLng = 0;

window.onload = function(){

var mapOptions = {
zoom: 17,
center: cenLatLng,
mapTypeId: google.maps.MapTypeId.HYBRID,
disableDefaultUI: false,
scrollwheel: true,
draggable: true,
navigationControl: false, //true,
mapTypeControl: false,
scaleControl: true,
disableDoubleClickZoom: true //false
};

map = new google.maps.Map(document.getElementById("RMUTiMapArea"), mapOptions);

for(var name in aps){

lat = aps[name].lat;
lng = aps[name].lng;

var latLng = new google.maps.LatLng(lat, lng);
markers[name] = new google.maps.Marker({
position: latLng,
title: name+': Drag and drop to new map position',
draggable: true,
map: map
});

//Add dragging event listeners.
google.maps.event.addListener(markers[name], 'dragstart', (function(marker, name) {
return function(){
updateMarkerPosition(markers[name].getPosition());
}
})(marker, name));

google.maps.event.addListener(markers[name], 'drag', (function(marker, name) {
return function(){
updateMarkerPosition(markers[name].getPosition());
}
})(marker, name));
google.maps.event.addListener(markers[name], 'dragend', (function(marker, name) {
return function(){
updateMarkerPositionDb(name, markers[name].getPosition());
}
})(marker, name));

}

};

function updateMarkerStatus(str)
{
document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng)
{
document.getElementById('lat').innerHTML = latLng.lat().toFixed(6) + ' :La';
document.getElementById('lng').innerHTML = latLng.lng().toFixed(6) + ' :Lo';
}

function updateMarkerPositionDb(name, latLng){
	alert(latLng.lat().toFixed(6)+" : "+latLng.lng().toFixed(6));
}



</script>
</div>

</body>
</html>