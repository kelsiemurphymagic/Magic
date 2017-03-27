<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <!-- www.123contactform.com script begins here -->
<script type="text/javascript" defer src="//www.123contactform.com/embed/2527372.js" data-role="form"></script>
<!-- www.123contactform.com script ends here -->
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCa611SSRzUH1JG2k951MmxTGghS_HiT68" type="text/javascript"></script>
<script>
var myCenter = new google.maps.LatLng(57.153979, -2.093766);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);



marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- add 
var marker = new google.maps.Marker({
  position:myCenter,
  });
  for marker
  -->
