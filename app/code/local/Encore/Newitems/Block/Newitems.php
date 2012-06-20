<?php

class Encore_Newitems_Block_Newitems extends Mage_Catalog_Block_Product_List 
{
    protected $_productCollection;

    /**
     * Retrieve loaded category collection
     *
     * @return Mage_Eav_Model_Entity_Collection_Abstract
     */
    protected function _getProductCollection()
    {

        if (null != $this->_productCollection)
        {
        return $this->_productCollection;
        }

        $todayDate = Mage::app()->getLocale()->date()->toString(Varien_Date::DATE_INTERNAL_FORMAT);

        /* @var $layer Mage_Catalog_Model_Layer */
        $layer = Mage::getSingleton('catalog/layer');
        /* @var $category Mage_Catalog_Model_Category */
        $category = Mage::getModel('catalog/category')->load(2);
        $layer->setCurrentCategory($category);
        $visibility = array(
            Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH,
            Mage_Catalog_Model_Product_Visibility::VISIBILITY_IN_CATALOG,
        );

        $collection = $layer->getProductCollection()
        // @todo Only grab the attributes we need to use
            ->addAttributeToFilter('news_from_date', array('date' => true, 'to' => $todayDate))
            ->addAttributeToFilter('news_to_date', array('or' => array(
                0 => array('date' => true, 'from' => $todayDate),
                1 => array('is' => new Zend_Db_Expr('null')))
            ), 'left')
            ->setOrder('news_from_date', 'desc');

        return $this->_productCollection = $collection;
    }
}