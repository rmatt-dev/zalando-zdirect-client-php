<?php

namespace Baumeister\ZalandoClient\Model;

class ProductSimple implements \JsonSerializable
{
    /**
     * @var string
     */
    private $merchant_product_simple_id;
    /**
     * @var array
     */
    private $product_simple_attributes;

    /**
     * @param string $merchant_product_simple_id
     * @return $this
     */
    public function setMerchantProductSimpleId(string $merchant_product_simple_id): self
    {
        $this->merchant_product_simple_id = $merchant_product_simple_id;
        return $this;
    }

    /**
     * @param array $product_simple_attributes
     * @return $this
     */
    public function setProductSimpleAttributes(array $product_simple_attributes): self
    {
        $this->product_simple_attributes = $product_simple_attributes;
        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}