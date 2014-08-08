<?php
 
class Web4Pro_CustomPayment_Model_CustomPayment extends Mage_Core_Model_Abstract
{	
	protected $_array = array();
    public function _construct()
    {
        parent::_construct();
        $this->_init('custompayment/customPayment');
        	
    }
    
    public function getPaymentsArray()
    { 
		if(!$this->_array)
		{			
			$collection = Mage::getModel('custompayment/customPayment')->getCollection();
			foreach($collection as $entity)
			{
				$temp = array();
				$temp['value'] = $entity['value'];
				$temp['custompayment_id'] = $entity['custompayment_id'];
				$this->_array[$entity['user_id']] = $temp;
			}
		}
		return $this->_array;
	}
	
	public function getPayment($id)
	{
		$val = NULL;
		if(!$this->_array)
		{
			$customPayment = Mage::getModel('custompayment/customPayment')->load($id);
			echo var_dump($customPayment); die();
			$val['value'] = $customPayment['value'];
			$val['custompayment_id'] = $customPayment['custompayment_id'];
			$val['user_id'] = $customPayment['user_id'];
		}
		else
		{
			$val = $this->_array[$id];
		}
		return $val;
	}
	//yum install curl-devel expat-devel gettext-devel openssl-devel zlib-devel
}
