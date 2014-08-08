<?php
class Web4Pro_ProductsAssoc_Model_ProductsAssoc_Observer
{
    public function __construct()
    {
    }

    public function products_assoc_form_submit($observer)
    {
		if(!empty($_POST['productsassoc']))
		{
			$productsIdsArray = $_POST['productsassoc'];

			try
			{
				$cart = Mage::getModel('checkout/cart');
				$cart->init();			
				$cart->addProductsByIds($productsIdsArray);
				$cart->save();
				Mage::getModel('checkout/session')->setCartWasUpdated(true);	
				Mage::app()->getResponse()->setRedirect(Mage::getUrl('checkout/cart/updatePost/'));
			}
			catch(Exception $e)
			{
				return $e->getMessage(); 
			}
		}
    }

}
