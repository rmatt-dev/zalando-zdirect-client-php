<?php

namespace Baumeister\ZalandoClient\Model;

class Order
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
     * @var OrderAttributes
     */
    public $attributes;
    /**
     * @var OrderRelationships
     */
    public $relationships;
}