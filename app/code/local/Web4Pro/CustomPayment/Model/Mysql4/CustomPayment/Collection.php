<?php
 
class Web4Pro_CustomPayment_Model_Mysql4_CustomPayment_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        //parent::__construct();
        $this->_init('custompayment/custompayment');
        
    }
        

}
