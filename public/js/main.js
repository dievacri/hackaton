	var inicio=new google.maps.LatLng(-12.096725, -77.026945);
	var puntoUno=new google.maps.LatLng(-12.096317, -77.027002);
	var puntoDos=new google.maps.LatLng(-12.096522, -77.028772);
	var puntoTres=new google.maps.LatLng(-12.095697, -77.028855);

function success(position) {  
 var status = document.querySelector('#status');  
 status.innerHTML = "¡Su ubicación!";  
 
 var mapcanvas = document.createElement('div');  
 mapcanvas.id = 'mapcanvas';  
 mapcanvas.style.height = '350px';  
 mapcanvas.style.width = '100%';  
 
 document.querySelector('#map').appendChild(mapcanvas);  
 
 var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);  
 var myOptions = {  
 zoom: 16,  
 center: latlng,  
 mapTypeControl: false,  
 navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},  
 mapTypeId: google.maps.MapTypeId.ROADMAP  
 }; 

 	

function initialize()
{
var mapProp = {
  center:inicio,
  zoom:17,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
var map=new google.maps.Map(document.getElementById("map"),mapProp);

var viajeBus=[inicio, puntoUno, puntoDos, puntoTres];
var rutaRecorrido=new google.maps.Polyline({
  path:viajeBus,
  strokeColor:"#0000FF",
  strokeOpacity:0.8,
  strokeWeight:2
  });

rutaRecorrido.setMap(map);

}

 var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);  
 
 var marker = new google.maps.Marker({  
 position: latlng,  
 map: map,  
 title:"Usted está aquí."  

 });
  google.maps.event.addDomListener(window, 'load', initialize); 
 

}  
 
function error(msg) {  
 var status = document.getElementById('status');  
 status.innerHTML= "Error [" + error.code + "]: " + error.message;   
}  
 
if (navigator.geolocation) {  
 navigator.geolocation.getCurrentPosition(success, error,{maximumAge:60000, timeout: 4000});  
} else {  
 error('Actualiza el navegador web para usar el API de localización');  
}  



	