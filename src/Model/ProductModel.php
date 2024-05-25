<?php

namespace Baumeister\ZalandoClient\Model;

class ProductModel implements \JsonSerializable
{
    /**
     * @var string
     */
    private $merchant_product_model_id;
    /**
     * @var array
     */
    private $product_model_attributes;
    /** @var ProductConfig[] */
    private $product_configs;

    /**
     * @param string $merchant_product_model_id
     * @return $this
     */
    public function setMerchantProductModelId(string $merchant_product_model_id): self
    {
        $this->merchant_product_model_id = $merchant_product_model_id;
        return $this;
    }

    /**
     * @param array $product_model_attributes
     * @return $this
     */
    public function setProductModelAttributes(array $product_model_attributes): self
    {
        $this->product_model_attributes = $product_model_attributes;
        return $this;
    }

    /**
     * @param  ProductConfig[]  $product_configs
     */
    public function setProductConfigs(array $product_configs): self
    {
        $this->product_configs = $product_configs;
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