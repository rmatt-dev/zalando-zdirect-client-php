<?php

namespace Baumeister\ZalandoClient\Model;

class ProductConfig implements \JsonSerializable
{
    /**
     * @var string
     */
    private $merchant_product_config_id;
    /**
     * @var array
     */
    private $product_config_attributes;
    /** @var ProductSimple[] */
    private $product_simples;

    /**
     * @param string $merchant_product_config_id
     * @return $this
     */
    public function setMerchantProductConfigId(string $merchant_product_config_id): self
    {
        $this->merchant_product_config_id = $merchant_product_config_id;
        return $this;
    }

    /**
     * @param array $product_config_attributes
     * @return $this
     */
    public function setProductConfigAttributes(array $product_config_attributes): self
    {
        $this->product_config_attributes = $product_config_attributes;
        return $this;
    }

    /**
     * @param  ProductSimple[]  $product_simples
     */
    public function setProductSimples(array $product_simples): self
    {
        $this->product_simples = $product_simples;
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