<?php

trait ProductDataProvider
{
    public function createProduct()
    {
        $attributeSetId = \Mage::getSingleton('eav/config')
            ->getEntityType(\Mage_Catalog_Model_Product::ENTITY)
            ->getDefaultAttributeSetId();

        $product = \Mage::getModel('catalog/product')
            ->setWebsiteIds(array(1))
            ->setAttributeSetId($attributeSetId)
            ->setTypeId('simple')
            ->setCreatedAt(strtotime('now'))
            ->setSku('testsku61')
            ->setName('test product21')
            ->setWeight(4.0000)
            ->setStatus(1)
            ->setTaxClassId(4)
            ->setVisibility(
                \Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH
            )
            ->setManufacturer(28)
            ->setColor(24)
            ->setNewsFromDate('06/26/2014')
            ->setNewsToDate('06/30/2030')
            ->setCountryOfManufacture('BR')
            ->setPrice(11.22)
            ->setCost(22.33)
            ->setSpecialPrice(20.00)
            ->setSpecialFromDate('06/1/2014')
            ->setSpecialToDate('06/30/2030')
            ->setMsrpEnabled(1)
            ->setMsrpDisplayActualPriceType(1)
            ->setMsrp(99.99)
            ->setMetaTitle('test meta title 2')
            ->setMetaKeyword('test meta keyword 2')
            ->setMetaDescription('test meta description 2')
            ->setDescription('This is a long description')
            ->setShortDescription('This is a short description')
            ->setCategoryIds(array(1));
        
        return $product;
    }
}
