<?php
class Web4Pro_News_Model_Authors extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('news/authors');
    }
    public function prepareAuthorsArray()
    {
        $authors = Mage::getModel('news/authors')->getCollection();
		$values = array();
		$values[0] = '';
		foreach($authors as $author)
		{
			$values[$author->getId()] = $author->getName();
		}
		return $values;
    }
    public function getAuthorsAssocArray()
    {
        $authors = Mage::getModel('news/authors')->getCollection();
		$values = array();

		foreach($authors as $author)
		{
			$value = array();
			$value['value'] = $author->getId();
			$value['label'] = $author->getName();
			$values[] = $value;
		}
		return $values;
    }
}
