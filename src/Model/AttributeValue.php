<?php

namespace Baumeister\ZalandoClient\Model;

use DateTime;

class AttributeValue
{
    /**
     * @var bool|null
     */
    public $boolean = null;
    /**
     * @var DateTime|null
     */
    public $datetime = null;
    /**
     * @var float|null
     */
    public $decimal = null;
    /**
     * @var int|null
     */
    public $integer = null;
    /**
     * @var string|null
     */
    public $string = null;
    /**
     * @var LocalizedValue|null
     */
    public $localized = null;
}