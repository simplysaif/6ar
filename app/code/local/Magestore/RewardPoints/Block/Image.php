<?php
/**
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category    
 * @package     Rewardpoints
 * @copyright   Copyright (c) 2012 
 * @license     
 */

/**
 * Rewardpoints Block
 * 
 * @category    
 * @package     Rewardpoints
 * @author      Developer
 */
class Magestore_RewardPoints_Block_Image extends Magestore_RewardPoints_Block_Template
{
    protected $_rewardPointsHtml = null;
    protected $_rewardAnchorHtml = null;
    
    /**
     * prepare block's layout
     *
     * @return Magestore_RewardPoints_Block_Image
     */
    public function _prepareLayout()
    {
        $this->setTemplate('rewardpoints/image.phtml');
        return parent::_prepareLayout();
    }
    
    /**
     * Render block HTML, depend on mode of name showed
     *
     * @return string
     */
    protected function _toHtml()
    {
        if ($this->getIsAnchorMode()) {
            if (is_null($this->_rewardAnchorHtml)) {
                $html = parent::_toHtml();
                if ($html) {
                    $this->_rewardAnchorHtml = $html;
                } else {
                    $this->_rewardAnchorHtml = '';
                }
            }
            return $this->_rewardAnchorHtml;
        } else {
            if (is_null($this->_rewardPointsHtml)) {
                $html = parent::_toHtml();
                if ($html) {
                    $this->_rewardPointsHtml = $html;
                } else {
                    $this->_rewardPointsHtml = '';
                }
            }
            return $this->_rewardPointsHtml;
        }
    }
    
    /**
     * get Policy Link for reward points system
     * 
     * @return string
     */
    public function getPolicyUrl()
    {
        return Mage::helper('rewardpoints/policy')->getPolicyUrl();
    }
}
