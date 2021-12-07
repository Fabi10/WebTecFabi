// Map initialisieren 
const map = L.map("map").setView([49.755, 6.639], 19);
const attribution = '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap<a/> contributors';
const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
const tiles = L.tileLayer(tileUrl, {
    attribution
});
tiles.addTo(map);

// show a scale bar on the map
L.control.scale().addTo(map);

// Marker für aktuelle Position 
L.marker([49.755, 6.639]).addTo(map)
    .bindPopup('Wir befinden uns hier!').openPopup();