<?php 

class Web4Pro_AjaxAdding_Block_Product_List extends Mage_Catalog_Block_Product_List
{
	protected function _construct()
    {
        parent::_construct();
       // echo var_dump($this); die();
        $this->setTemplate('catalog/product/ajaxadding_list.phtml');
    }
}
