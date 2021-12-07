// Initialize and add the map
function initMap() {
    const toronto = { lat: 43.639, lng: -79.380 };
    // The map, centered at Toronto
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 12,
        center: toronto,
    });
    // Create the places service.
    const service = new google.maps.places.PlacesService(map);
    let getNextPage;
    const moreButton = document.getElementById("more");

    moreButton.onclick = function () {
        moreButton.disabled = true;
        if (getNextPage) {
            getNextPage();
        }
    };

    // Perform a nearby search.
    service.nearbySearch(
        { location: toronto, radius: 50000, type: "restaurant" },
        (results, status, pagination) => {
            if (status !== "OK" || !results) return;

            addPlaces(results, map);
            moreButton.disabled = !pagination || !pagination.hasNextPage;
            if (pagination && pagination.hasNextPage) {
                getNextPage = () => {
                    // Note: nextPage will call the same handler function as the initial call
                    pagination.nextPage();
                };
            }
        }
    );
}

function addPlaces(places, map) {
    const placesList = document.getElementById("places");

    for (const place of places) {
        if (place.geometry && place.geometry.location) {
            const image = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25),
            };

            const marker = new google.maps.Marker({
                map,
                title: place.name,
                animation: google.maps.Animation.DROP,
                position: place.geometry.location,
            });

            // Create an info window to share between markers.
            const infoWindow = new google.maps.InfoWindow();

            marker.addListener("click", () => {
                map.setZoom(20);
                map.setCenter(marker.getPosition());
                infoWindow.close();
                infoWindow.setContent(marker.getTitle());
                infoWindow.open(marker.getMap(), marker);
            });

            const li = document.createElement("li");

            li.textContent = place.name;
            placesList.appendChild(li);
            li.addEventListener("click", () => {
                map.setCenter(place.geometry.location);
            });
        }
    }
}
