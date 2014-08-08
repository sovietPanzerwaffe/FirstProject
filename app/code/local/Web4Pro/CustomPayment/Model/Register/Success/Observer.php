<?php
    class Web4Pro_CustomPayment_Model_Register_Success_Observer
    {
        public function __construct()
        {
        }

        public function apply_start_money($observer)
        {
			$customer = $observer->getCustomer();
			$id = $customer->getId();
			//echo $id; die();
			$startCapital = Mage::getStoreConfig('payment/custompayment/value');
			$customPayment = Mage::getModel('custompayment/customPayment')
									->setUserId($id)
									->setValue($startCapital)
									->save();
			
			
			return $this;
        }
    }
