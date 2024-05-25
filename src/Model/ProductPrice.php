<?php

namespace Baumeister\ZalandoClient\Model;

class ProductPrice
{
    /**
     * @var string
     */
    public $ean;
    /**
     * @var string
     */
    public $sales_channel_id;
    /**
     * @var RegularPrice
     */
    public $regular_price;
}