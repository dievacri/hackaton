if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
} else {
    x.innerHTML = "Geolocation is not supported by this browser.";
}

var map;
function showPosition(position) 
{
	
	map = new GMaps({
	  div: '#map',
	  lat: position.coords.latitude,
	  lng: position.coords.longitude,
	  zoom: 12
	});

	map.addMarker({
	  lat: position.coords.latitude,
	  lng: position.coords.longitude,
	  title: 'Lima',
	  click: function(e) {
	    alert('Tu estas aqui.!');
	  }
	});

	path = [
			[-12.096395598951426, -77.02503383159637],
			[-12.093405756244751, -77.02331721782684],
			[-12.091265637779138, -77.02283442020416],
			[-12.089398265520158, -77.02360689640045],
			[-12.070356619189146,-77.03143894672394],
			[-12.0621940003629,-77.03449130058289],
			[-12.059817561408817,-77.03585118055344],
			[-12.05850080581313,-77.03567951917648]
	];

	map.addMarker({
	  lat: -12.05850080581313,
	  lng: -77.03567951917648,
	  title: 'Centro Civico',
	  click: function(e) {
	    alert('Paradero Final: Centro Civico');
	  }
	});

	map.drawPolyline({
	  path: path,
	  strokeColor: '#131540',
	  strokeOpacity: 0.6,
	  strokeWeight: 6
	});
}

