<?php

namespace Baumeister\ZalandoClient\Model;

use DateTime;

class StockLocation
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var Location
     */
    public $location;
    /**
     * @var string
     */
    public $abbreviation;
    /**
     * @var DateTime
     */
    public $valid_from;
}