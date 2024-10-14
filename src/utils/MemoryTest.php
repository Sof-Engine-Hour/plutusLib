<?php

namespace Fdvice\utils ;



final class MemoryTest
{
    static function createObject() {
        $ids = [1704111, 1704112, 1704113, 1704115, 1704116, 1704118 , 1704120];
        return (object)[
            'id' => $ids[array_rand($ids)],
            'name' => 'Device_' . rand(1, 1000),
            'status' => rand(0, 1),
            'duration' => rand(10, 120),
            'timestamp' => time(),
            'condition' => "duration > ".rand(200, 9000),
        ];
    }


    static function loadObjects(int $num_records) {
        $objectList = [];

        for ($i = 0; $i <  $num_records; $i++) {
            $objectList[] = MemoryTest::createObject();
        }

        return $objectList ;
    }

    static function getCalcId(string $topic) : int {
        return (int) explode("/" , $topic)[4] ;
    }


    static function findObjectsById($objects, $searchId) {

        $matchedObjects = [];

        // Iterate through all objects to find matches
        foreach ($objects as $object) {
            if ($object->id === $searchId) {
                $matchedObjects[] = $object;
            }
        }

        return $matchedObjects;
    }
}