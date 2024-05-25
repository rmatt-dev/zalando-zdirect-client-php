<?php

namespace Baumeister\ZalandoClient\Model;

class OrderLineAttributes
{
    const STATUS_INITIAL = 'initial';
    const STATUS_RESERVED = 'reserved';
    const STATUS_SHIPPED = 'shipped';
    const STATUS_RETURNED = 'returned';
    const STATUS_CANCELED = 'canceled';

    /**
     * @var string
     */
    public $order_line_id;
    /**
     * @var string
     */
    public $order_item_id;
    /**
     * @var string
     */
    public $status;
    /**
     * @var Money
     */
    public $price;
}