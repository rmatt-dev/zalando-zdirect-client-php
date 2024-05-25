<?php

namespace Baumeister\ZalandoClient\Model;

use DateTime;

class OrderAttributes
{
    const STATUS_INITIAL = 'initial';
    const STATUS_APPROVED = 'approved';
    const STATUS_FULFILLED = 'fulfilled';

    const TYPE_ZALANDO = 'ZalandoFulfilled';
    const TYPE_PARTNER = 'PartnerFulfilled';

    /**
     * @var string
     */
    public $order_id;
    /**
     * @var string
     */
    public $order_number;
    /**
     * @var string
     */
    public $customer_number;
    /**
     * @var string
     */
    public $customer_email;
    /**
     * @var string
     */
    public $order_type;
    /**
     * @var string
     */
    public $status;
    /**
     * @var bool
     */
    public $exported;
    /**
     * @var Address
     */
    public $shipping_address;
    /**
     * @var Address
     */
    public $billing_address;
    /**
     * @var int
     */
    public $order_lines_count;
    /**
     * @var float
     */
    public $order_lines_price_amount;
    /**
     * @var string
     */
    public $order_lines_price_currency;
    /**
     * @var Money
     */
    public $shipping_costs;
    /**
     * @var DateTime
     */
    public $order_date;
    /**
     * @var DateTime
     */
    public $created_at;
}