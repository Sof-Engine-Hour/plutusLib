<?php

namespace Fdvice\geofence;

use Fdvice\geofence\manage\Geofence;
use Fdvice\geofence\manage\GeofenceDto;
use Fdvice\geofence\manage\GeofenceInterface;


final class FacadeGeofence
{
    private static GeofenceInterface $grefence;

    function __construct()
    {
        self::$grefence =  new Geofence() ;
    }


    function addGeofence(GeofenceDto $geofenceDto , $userToken) {
        $res = self::$grefence->addGeofence($geofenceDto , $userToken) ;
        return $res ;
    }

    function deleteGeofence(GeofenceDto $geofenceDto, $userToken) :array {
        $res = self::$grefence->deleteGeofence($geofenceDto , $userToken) ;
        return $res ;
    }


    function updateGeofence(GeofenceDto $geofenceDto , $userToken): array {

        $res = self::$grefence->updateGeofence($geofenceDto , $userToken) ;

        return $res ;
    }

    
}