<?php
/**
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category    
 * @package     Connector
 * @copyright   Copyright (c) 2012 
 * @license     
 */

/**
 * Connector Model
 * 
 * @category    
 * @package     Connector
 * @author      Developer
 */
class Simi_Connector_Model_Catalog extends Simi_Connector_Model_Abstract {
    
//    protected $_data;
    public function _helperCatalog(){
        return Mage::helper('connector/catalog');
    }
    public function _construct() {
        parent::_construct();
    }
    
//    public function setCacheData($data) {
//        $this->_data = $data;
//    }
//
//    public function getCacheData() {
//        return $this->_data;
//    }
        
    public function getProductAttributes() {
        return Mage::getSingleton('catalog/config')->getProductAttributes();
    }

    public function getModel($name_model) {        
        return Mage::getModel($name_model);
    }

    public function getResourceModel($name_resource) {
        return Mage::getResourceModel($name_resource);
    }

    public function setAvailableProduct($productCollection) {
        // edit setCurrentStore
        Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($productCollection);
        Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($productCollection);
        $productCollection->addUrlRewrite(0);
    }
    
//    public function changeData(){
//        
//    }

}