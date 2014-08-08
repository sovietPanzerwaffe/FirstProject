<?php
 
class Web4Pro_CustomPayment_Model_Mysql4_CustomPayment extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {   
        $this->_init('custompayment/custompayment', 'custompayment_id');
    }
}
