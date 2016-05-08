<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
  <script src="{{ secure_asset('js/locationpicker.jquery.js') }}"></script>
</head>
<body>

<div class="container">
    
Location: <input type="text" id="us2-address" style="width: 200px"/>
Radius: <input type="text" id="us2-radius"/>
<div id="us2" style="width: 500px; height: 400px;"></div>				
Lat.: <input type="text" id="us2-lat"/>
Long.: <input type="text" id="us2-lon"/>
<script>$('#us2').locationpicker({
	location: {latitude: 46.15242437752303, longitude: 2.7470703125},	
	radius: 300,
	inputBinding: {
        latitudeInput: $('#us2-lat'),
        longitudeInput: $('#us2-lon'),
        radiusInput: $('#us2-radius'),
        locationNameInput: $('#us2-address')
    }
	});
</script>		

</div>

</body>
</html>