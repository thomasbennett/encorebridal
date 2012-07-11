<?php
class VladimirPopov_WebForms_Model_Observer{
	
	public function addAssets($observer){
		$layout = $observer->getLayout();
		$update = $observer->getLayout()->getUpdate();
			
		if(in_array('cms_page', $update->getHandles())){
			
			$pageId = Mage::app()->getRequest()
				->getParam('page_id', Mage::app()->getRequest()->getParam('id', false));
			
			$page = Mage::getModel('cms/page')->load($pageId);
			
			if(stristr($page->getContent(),'webforms/form')){
				Mage::helper('webforms')->addAssets($layout);
			}
		}
		
	}
}
?>
