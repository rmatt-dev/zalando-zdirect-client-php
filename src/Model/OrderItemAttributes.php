<?php

namespace Baumeister\ZalandoClient\Model;

class OrderItemAttributes
{
    /**
     * @var string
     */
    public $order_item_id;
    /**
     * @var string
     */
    public $order_id;
    /**
     * @var string
     */
    public $article_id;
    /**
     * @var string
     */
    public $external_id;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $quantity_initial;
}