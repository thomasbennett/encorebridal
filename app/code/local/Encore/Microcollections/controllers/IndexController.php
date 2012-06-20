<?php
/**
 * indexcontoller for microcollections url to display theme images
 *
 * @name Encore_Microcollections_IndexController
 * @auther Jeremy Grier <jgintlio@gmail.com>
 */

class Encore_Microcollections_IndexController extends Mage_Core_Controller_Front_Action 
{

  public function indexAction()
  {
     $this->loadLayout();
     $this->renderLayout();
  }
}
