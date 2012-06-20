<?php
/**
 * Description of IndexController
 *
 * @author jgrier
 */
class Encore_Newitems_IndexController extends Mage_Core_Controller_Front_Action {
    
    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }
}

?>