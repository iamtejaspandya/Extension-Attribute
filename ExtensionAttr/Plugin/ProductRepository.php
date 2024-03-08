<?php

namespace Tejas\ExtensionAttr\Plugin;

use Magento\Catalog\Api\ProductRepositoryInterface;

class ProductRepository

{
    public function afterGet(ProductRepositoryInterface $subject, $result, $sku)
    {
        $extensionAttribute = $result->getExtensionAttributes();
        $productCustomAttribute = $result->getData('product_custom_attribute');
        $extensionAttribute->setCustomAdd($productCustomAttribute);
        $result->setExtensionAttributes($extensionAttribute);
        return $result;
    }
}
