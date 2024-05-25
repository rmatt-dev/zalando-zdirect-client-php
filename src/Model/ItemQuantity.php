<?php

namespace Baumeister\ZalandoClient\Model;

class ItemQuantity
{
    /**
     * @var string
     */
    public $ean;
    /**
     * @var int
     */
    public $total_quantity;
    /**
     * @var QuantitiesByState
     */
    public $quantities_by_state;
    /** @var QuantitiesByLocation[] */
    public $quantities_by_location;
}