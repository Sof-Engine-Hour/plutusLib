<?php

namespace Fdvice\calculate\calculateIntervals ;

interface CalculateIntervalInterface {

    function getIntervalesOfDevice($dataQuery , $credentials) : array;
    function getLastIntervaleOfDevice($dataQuery , $credentials) : array;

    function buildFilter($filter_asJson) :String ;

}