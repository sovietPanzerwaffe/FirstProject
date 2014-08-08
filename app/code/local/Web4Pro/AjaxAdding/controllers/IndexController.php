<?php
class Web4Pro_AjaxAdding_IndexController extends Mage_Core_Controller_Front_Action
{

	public function updateMinicartAction()
	{
		
		$params = $this->getRequest()->getParams();
		if(!$params)
		{
			return;
		}
		$minicartBlock = $this->getLayout()->createBlock('ajaxadding/cart_minicart');
		$minicartBlock->setTemplate('checkout/cart/minicart.phtml'); 
		$itemsBlock = $this->getLayout()->createBlock('ajaxadding/cart_sidebar');
		$itemsBlock->setTemplate('web4pro/ajaxadding/minicart/items.phtml'); 
		
		
		//echo $minicartBlock->renderView();
		$minicartHtml = $minicartBlock->renderView();
		$itemsHtml = $itemsBlock->renderView();
		//echo $itemsBlock->renderView();
		$blocks = array('minicart' => $minicartBlock->toHtml(), /*'list' =>$itemsBlock->toHtml() */);
		//echo json_encode($blocks);

		echo $minicartBlock->toHtml();
		echo $itemsBlock->toHtml();
		
	}
	
}
