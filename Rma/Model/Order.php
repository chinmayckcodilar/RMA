<?php

namespace Codilar\Rma\Model;

class Order extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'codilar_rma_order';

	protected $_cacheTag = 'codilar_rma_order';

	protected $_eventPrefix = 'codilar_rma_order';


	protected function _construct()
	{
		$this->_init('Codilar\Rma\Model\ResourceModel\Order');
	}
	public function getIdentities(){
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
	public function getDefaultValues(){
		$values = [];
		return $values;
	}
}