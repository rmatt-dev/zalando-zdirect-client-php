<?php

namespace Baumeister\ZalandoClient\Model;

class OrderItem
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $type;
    /**
     * @var OrderItemAttributes
     */
    public $attributes;
}