// from https://stackoverflow.com/questions/1502590/calculate-distance-between-two-points-in-google-maps-v3/1502821#1502821
function rad(x) {
  return x * Math.PI / 180;
};

// prend 2 tableau a 2 coordonées
function getDistance(p1, p2) {
  let R = 6378137; // Earth’s mean radius in meter
  let dLat = rad(p2[0] - p1[0]);
  let dLong = rad(p2[1] - p1[1]);
  //  R * (Math.PI/2 - Math.asin( Math.sin(lat_b) * Math.sin(lat_a) + Math.cos(lon_b - lon_a) * Math.cos(lat_b) * Math.cos(lat_a)))

  let a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(rad(p1[0])) * Math.cos(rad(p2[0])) *
    Math.sin(dLong / 2) * Math.sin(dLong / 2);
  let c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  let d = R * c;
  return d; // returns the distance in meter
};

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(distance);
    } else {
        console.warn("navigator.geolocation error");
    }
}

// retourne la distance entre destination et la position GPS
function distance(position){
  return getDistance(destination, [position.coords.latitude, position.coords.longitude])
}

// coordonées de l'attraction à ecrire en php dans une balise script
// let destination=[47.3983,5.0898];
