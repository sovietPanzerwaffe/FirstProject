<?php
 
class Web4Pro_News_Model_News extends Mage_Core_Model_Abstract
{
	protected $_authors;
	
    public function _construct()
    {
        parent::_construct();
        $this->_init('news/news');
    }


 	public function prepareCollectionWithAuthors($limit, $currentPage)
 	{
		if($currentPage === NULL)
		{
			$currentPage = 1;
		}
		if($limit === NULL)
		{
			$limit = 5;
		}
		$collection = parent::getCollection()
                            ->setPageSize($limit)
                            ->setCurPage($currentPage);
		$this->_authors = Mage::getModel('news/authors')->prepareAuthorsArray();
        foreach($collection as $element)
        {
			$authorId = $element->getAuthor();
			if( array_key_exists($authorId, $this->_authors))
			{
				$element->setAuthor($this->_authors[$authorId]);
			}
			else
			{
				$element->setAuthor('');
			}
		}
		return $collection;
	}


    public function prepareCollectionForHomePage()
    {
        $collection = Mage::getModel('news/news')->getCollection();
        $collection->setPageSize(2);
        $collection->setOrder('created_time','DESC');
        $this->_authors = Mage::getModel('news/authors')->prepareAuthorsArray();
        foreach($collection as $element)
        {
            $authorId = $element->getAuthor();
            if(array_key_exists($authorId, $this->_authors))
            {
                $element->setAuthor($this->_authors[$authorId]);
            }
            else
            {
                $element->setAuthor('');
            }
        }
        return $collection;
    }
}
