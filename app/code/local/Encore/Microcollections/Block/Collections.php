<?php

class Encore_Microcollections_Block_Collections extends Mage_Catalog_Block_Product_Abstract {

  public function getImageUrl($categoryThumbnail) {
    return Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . "catalog/category/" . $categoryThumbnail;
  }
}
?>
