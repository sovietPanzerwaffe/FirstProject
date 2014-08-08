<?php

class Web4Pro_CustomPayment_Block_Adminhtml_Customer_Edit_Tabs extends Mage_Adminhtml_Block_Customer_Edit_Tabs
{
	protected function _beforeToHtml()
    {

		 $this->addTab('credit', array(
            'label'     => Mage::helper('customer')->__('Credit'),
            'content'   => $this->getLayout()->createBlock('custompayment/adminhtml_customer_edit_tab_credit')->initForm()->toHtml(),
        ));
		//echo var_dump($this->getLayout()->createBlock('custompayment/adminhtml_customer_edit_tab_credit')); die();
        $this->_updateActiveTab();
        Varien_Profiler::stop('customer/tabs');
        return parent::_beforeToHtml();
    }
}
