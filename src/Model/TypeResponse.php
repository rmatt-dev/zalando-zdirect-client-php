<?php

namespace Baumeister\ZalandoClient\Model;

class TypeResponse
{
    /**
     * @var string
     */
    public $label;
    /**
     * @var Name
     */
    public $name;
    /**
     * @var Description
     */
    public $description;
    /**
     * @var string
     */
    public $cardinality;
    /**
     * @var TypeDefinition
     */
    public $definition;
    /**
     * @var string
     */
    public $usage;
    /** @var string[] */
    public $type_variants;
}