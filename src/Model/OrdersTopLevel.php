<?php

namespace Baumeister\ZalandoClient\Model;

class OrdersTopLevel
{
    /** @var Order[] */
    public $data;
    /**
     * @var Meta
     */
    public $meta;
    /** @var ResourceObject[] */
    public $included;
}