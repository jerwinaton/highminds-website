$(document).ready(() => {
  // create map from leaflet function
  const createMap = (lat, lon, mapID, location) => {
    var map = L.map(mapID).setView([lat, lon], 19);
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    L.marker([lat, lon])
      .addTo(map)
      .bindPopup(`HGHMNDS ${location}`)
      .openPopup();
    var popup = L.popup();

    function onMapClick(e) {
      popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
    }
  };

  // pass parameters longitude, latitude, mapid, and location
  createMap(14.62672490501913, 121.04810131759602, "cubaoMap", "Cubao");
  createMap(14.564914899664496, 121.0542246820279, "makatiMap", "Makati");
  createMap(14.565914, 120.998094, "manilaMap", "Manila");
});
