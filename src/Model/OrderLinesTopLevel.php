<?php

namespace Baumeister\ZalandoClient\Model;

class OrderLinesTopLevel
{
    /** @var OrderLine[] */
    public $data;
    /**
     * @var Meta
     */
    public $meta;
    /** @var ResourceObject[] */
    public $included;
}