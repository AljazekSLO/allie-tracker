<?php

function calculateDistance($c1, $c2)
{
    $earthRadius = 6371; // Radius of the Earth in kilometers

    $distance = acos(sin(deg2rad($c1->latitude)) * sin(deg2rad($c2->latitude)) + cos(deg2rad($c1->latitude)) * cos(deg2rad($c2->latitude)) * cos(deg2rad($c2->longitude) - deg2rad($c1->longitude))) * $earthRadius;

    return round($distance);
}

?>