<?php

trait hasGeoLocation {

    public function getCoordinates($location)
    {

        $maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($location);

        $maps_json = file_get_contents($maps_url);

        $maps_array = json_decode($maps_json, true);

        $lat = $maps_array['results'][0]['geometry']['location']['lat'];
        $lng = $maps_array['results'][0]['geometry']['location']['lng'];

        return ['lat' => $lat, 'lng' => $lng];
    }

    public function getGoogleMap($lat, $lng)
    {

        return 'https://www.google.com/maps/?q=' . $lat . ',' . $lng;

    }

}