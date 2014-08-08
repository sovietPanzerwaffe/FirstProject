<?php

class Web4Pro_CustomPayment_Block_CustomPayment extends Mage_Core_Block_Template
{
	public function getCapital()
	{
		$capital = '';
		if(Mage::getSingleton('customer/session')->isLoggedIn()) 
		{
			$customerData = Mage::getSingleton('customer/session')->getCustomer();
			$id = $customerData->getId();
			$customPayments = Mage::getModel('custompayment/custompayment')->load($id);
			$capital = $customPayments->getValue();
		}
		return $capital;
		
	}
}
