<?php

namespace Codilar\Rma\Model\ResourceModel;

class Condition extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{

	public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context){

		parent::__construct($context);
	}

	protected function _construct()
	{
		$this->_init('codilar_rma_condition', 'condition_id');

	}
}