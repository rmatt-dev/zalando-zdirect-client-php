<?php

namespace Baumeister\ZalandoClient\Model;

class OutlineTier
{
    /** @var string[]  */
    public $mandatory_types;
    /** @var string[]  */
    public $optional_types;
    /** @var AttributePerType[] */
    public $restricted_attributes;
}