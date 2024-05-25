<?php

namespace Baumeister\ZalandoClient\Model;

class OrderLine
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
     * @var OrderLineAttributes
     */
    public $attributes;
}