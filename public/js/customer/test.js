function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: { lat: 7.2906, lng: 80.6337 },
    disableDefaultUI: true,
  });
}

var data=JSON.parse(document.getElementById("data").innerHTML);
var address=data.address;
// console.log(newdata);

var geocoder = new google.maps.Geocoder();

function codeAddress() {
    
    var data=JSON.parse(document.getElementById("data").innerHTML);
    var address=data.address;

    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        // map.setCenter(results[0].geometry.location);
        console.log(results[0].geometry.location);
        
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }                                                                               