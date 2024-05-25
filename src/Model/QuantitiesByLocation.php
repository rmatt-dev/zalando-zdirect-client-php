<?php

namespace Baumeister\ZalandoClient\Model;

class QuantitiesByLocation
{
    /**
     * @var string
     */
    public $stock_location_id;
    /**
     * @var QuantitiesByState
     */
    public $quantities_by_state;
}