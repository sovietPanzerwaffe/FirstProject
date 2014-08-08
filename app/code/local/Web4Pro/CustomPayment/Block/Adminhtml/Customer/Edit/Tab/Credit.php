<?php

class Web4Pro_CustomPayment_Block_Adminhtml_Customer_Edit_Tab_Credit extends Mage_Adminhtml_Block_Widget_Form
{
	public function initForm()
    {
        $customer = Mage::registry('current_customer');

        $form = new Varien_Data_Form();
        $fieldset = $form->addFieldset('address_fieldset', array(
            'legend'    => Mage::helper('customer')->__("Edit Customer's Address"))
        );

        $customPayment = Mage::getModel('custompayment/customPayment');
        $creditForm = Mage::getModel('customer/form');
		
		$customer = Mage::registry('current_customer');
		
		$fieldset->addField('value', 'text', array(
            'label'     => Mage::helper('customer')->__('Credit'),
            'class'     => 'required-entry',
            'required'  => true,
            'name'      => 'value',
            'value'   => $customPayment->getPayment($customer->getId())
        ));


        $form->setValues($customPayment->getData());
        $this->setForm($form);

        return $this;

		
        return $this;
    }
}
