<?php

namespace Baumeister\ZalandoClient\Model;

class ProductSubmission implements \JsonSerializable
{
    /**
     * @var string
     */
    private $outline;
    /**
     * @var ProductModel
     */
    private $product_model;

    /**
     * @param string $outline
     * @return $this
     */
    public function setOutline(string $outline): self
    {
        $this->outline = $outline;
        return $this;
    }

    /**
     * @param ProductModel $product_model
     * @return $this
     */
    public function setProductModel(ProductModel $product_model): self
    {
        $this->product_model = $product_model;
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