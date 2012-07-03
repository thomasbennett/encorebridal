<?php
/**
 * Require(dev) 
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @package     Mage_Adminhtml
 * @copyright   Copyright (c) 2012 Require(dev), LLC. (http://www.requiredev.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Grid column image renderer
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author     Require(dev) Core Team <info@requiredev.com>
 */
class Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Image extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract {
        protected static $showImagesUrl = null;
        protected static $showByDefault = null;
        protected static $width = null;
        protected static $height = null;

        public function __construct() {
            if(self::$showImagesUrl == null)
                self::$showImagesUrl = 1;
            if(self::$showByDefault == null)
                self::$showByDefault = 1;
            if(self::$width == null)
                self::$width = '60px';
            if(self::$height == null)
                self::$height = '60px';
        }

        /**
         * Renders grid column
         *
         * @param   Varien_Object $row
         * @return  string
         */
        public function render(Varien_Object $row) {
            return $this->_getValue($row);
        } 

        protected function _getValue(Varien_Object $row) {
            $dored = false;

            if ($getter = $this->getColumn()->getGetter()) {
                $val = $row->$getter();
            }

            $val = $val2 = $row->getData($this->getColumn()->getIndex());
            $val = str_replace("no_selection", "", $val);
            $val2 = str_replace("no_selection", "", $val2);
            $url = Mage::helper('adminhtml')->getImageUrl($val);

            if(!Mage::helper('adminhtml')->getFileExists($val)) {
                $dored =true;
                $val .= "[!]";
            }

            if(strpos($val, "placeholder/")) {
                $dored = true;
            }

            $filename = substr($val2, strrpos($val2, "/")+1, 
															strlen($val2)-strrpos($val2, "/")-1);
            $_url = $url;

            if(!self::$showImagesUrl) $filename = '';

						/*
						if ($dored) {
								$val = "<span style=\"color:red\" id=\"img\">$filename</span>";
						} else {
								$val = "<span style=\"color:#888;\">". $filename ."</span>";
						}
						 */

						if (empty($val2) ) {
								$out = "<center>" . $this->__("(no image)") . "</center>";
						} else {
								$out = '<center><a href="'.$_url.'" target="_blank" id="imageurl">';
						}

						if(self::$showByDefault && !empty($val2) ) {
								$out .= "<img src=". $url ." width='60px' ";
								$out .=" />";
						}

						$out .= '</a></center>';

						return $out;

				}
		}
